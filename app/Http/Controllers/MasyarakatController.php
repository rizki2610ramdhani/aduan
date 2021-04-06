<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Masyarakat;

use App\Pengaduan;
use App\Tanggapan;
use App\Petugas;

class MasyarakatController extends Controller
{
    //about auth
    public function index()
    {
        return view('Masyarakat.landing-page');
    }
    public function register()
    {
        return view('Masyarakat.register');
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
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'foto' => $input['foto'],
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        toastr()->success('Akun berhasil didaftarkan');
        return redirect('/login');
    }





    //content
    public function dashboard()
    {
        $aduanuser = Pengaduan::where('nik', Auth::user()->nik)->orderBy('created_at', 'desc')->get();
        return view('Masyarakat.dashboard', compact('aduanuser'));
    }
    //form aduan
    public function createaduan()
    {
        return view('masyarakat.create-aduan');
    }
    public function postaduan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tgl_aduan' => 'required',
            'aduan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5048'
        ]);
        $input = $request->all();
        $imageName = time() . '.' . request()->foto->getClientOriginalExtension();
        $input['foto'] = $imageName;
        request()->foto->move(public_path('imagesDB'), $imageName);

        Pengaduan::create([
            'nik' => Auth::user()->nik,
            'judul' => $input['judul'],
            'tgl_aduan' => $input['tgl_aduan'],
            'aduan' => $input['aduan'],
            'foto' => $input['foto'],
            'status' => '0'
        ]);
        toastr()->success('Aduan berhasil dibuat');
        return redirect('/masyarakat-dashboard');
    }
    //show detail aduan
    public function show($id)
    {
        $aduan =  Pengaduan::where('id', $id)->get();
        return view('masyarakat.show-aduan', compact('aduan'));
    }
    //show profile
    public function profile(Request $request)
    {
        return view('masyarakat.profile');
    }
    //edit profile
    public function editprofile(Request $request)
    {
        return view('masyarakat.edit-profile');
    }
    //edit profile
    public function postprofile(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:36|min:3',
            'foto' => 'image|mimes:jpeg,png,jpg|max:5048',
        ]);
        $ubah = Masyarakat::findorfail(Auth::user()->nik);
        if ($request->file('foto') == "") {
            $ubah->foto = $ubah->foto;
        } else {
            $filename = $ubah->foto;
            $request->file('foto')->move("imagesProfile/", $filename);
            $ubah->foto = $filename;
        }
        $ubah->nama = $request->nama;
        $ubah->save();
        toastr()->success('Profile berhasil diedit');
        return redirect('/masyarakat-profile');
    }
    //show detail tanggapan
    public function tanggapan($id)
    {
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->get();
        return view('masyarakat.show-tanggapan', compact('tanggapan'));
    }
}
