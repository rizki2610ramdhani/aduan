<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;


class AdminController extends Controller
{
    //dashboard
    public function dashboard()
    {
        $admin = Petugas::where('level', 'admin')->orderBy('created_at', 'desc')->get();
        $petugas = Petugas::where('level', 'petugas')->orderBy('created_at', 'desc')->get();
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->get();
        $masyarakat = Masyarakat::orderBy('created_at', 'desc')->get();
        $adt = Pengaduan::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('admin', 'petugas', 'pengaduan', 'masyarakat', 'adt'));
    }

    //show detail aduan
    public function showaduan($nik)
    {
        $aduan =  Pengaduan::where('nik', $nik)->get();
        return view('admin.show-aduan', compact('aduan'));
    }

    //show detail aduan
    public function cetak()
    {
        $dtall =  Pengaduan::orderBy('status', 'desc')->orderBy('created_at', 'desc')->get();
        return view('admin.cetak', compact('dtall'));
    }


    //regist
    public function register()
    {
        return view('admin.register');
    }
    public function postregister(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:36|min:3',
            'nik' => 'required|max:16|min:10|unique:masyarakat,nik||unique:petugas,nik',
            'username' => 'required|max:25|min:5|unique:masyarakat,username||unique:petugas,username',
            'password' => 'required|min:8|max:32',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'telp' => 'required|max:13|min:10|unique:masyarakat,telp||unique:petugas,telp'
        ]);
        $input = $request->all();
        $imageName = time() . '.' . request()->foto->getClientOriginalExtension();
        $input['foto'] = $imageName;
        request()->foto->move(public_path('imagesProfile'), $imageName);
        Petugas::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'foto' => $input['foto'],
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => 'admin'
        ]);
        toastr()->success('Akun berhasil didaftarkan');
        return redirect('/login');
    }

    //daftar msyarakat
    public function masyarakat()
    {
        $masyarakat = Masyarakat::orderBy('created_at', 'desc')->get();
        return view('admin.dft-masyarakat', compact('masyarakat'));
    }

    //promote to petugas
    public function promote($nik)
    {
        $msy = Masyarakat::findorfail($nik);
        Petugas::create([
            'nik' => $msy->nik,
            'nama' => $msy->nama,
            'username' => $msy->username,
            'password' => $msy->password,
            'telp' => $msy->telp,
            'foto' => $msy->foto,
            'level' => 'petugas'
        ]);
        Pengaduan::where('nik', $nik)->delete();
        $msy->delete();
        return redirect('/admin-dft-masyarakat');
    }

    //daftar petugas
    public function petugas()
    {
        $petugas = Petugas::where('level', 'petugas')->orderBy('created_at', 'desc')->get();
        return view('admin.dft-petugas', compact('petugas'));
    }

    //daftar admin
    public function admin()
    {
        $admin = Petugas::where('level', 'admin')->orderBy('created_at', 'desc')->get();
        return view('admin.dft-admin', compact('admin'));
    }

    //dlt msy
    public function dltmsy($nik)
    {
        Masyarakat::findorfail($nik)->delete();
        Pengaduan::where('nik', $nik)->delete();
        return redirect('/admin-dft-masyarakat');
    }

    //dlt ptg
    public function dltptg($nik)
    {
        $tgp = Tanggapan::where('petugas_nik', $nik)->first();
        $tgp->petugas_nik = "";
        $tgp->save();
        Petugas::where('nik', $nik)->delete();
        return redirect('/admin-dft-masyarakat');
    }

    //admin profilr
    public function profile()
    {
        return view('admin.profile');
    }

    //histori msy
    public function ptghistori($nik)
    {
        $histori = Tanggapan::where('petugas_nik', $nik)->orderBy('created_at', 'desc')->get();
        return view('admin.histori-ptg', compact('histori'));
    }

    //dft pengaduan
    public function pengaduan()
    {
        $sls = Pengaduan::where('status', 'selesai')->get();
        $prs = Pengaduan::where('status', 'proses')->get();
        $blm = Pengaduan::where('status', '0')->get();
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->get();
        return view('admin.dft-aduan', compact('pengaduan', 'sls', 'prs', 'blm'));
    }

    //proses
    public function proses($id)
    {
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->get();
        $detail = Pengaduan::where('id', $id)->get();
        return view('admin.proses', compact('detail', 'tanggapan'));
    }
}
