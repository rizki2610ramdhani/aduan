<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;


class PetugasController extends Controller
{
    //dashboard petugas
    public function dashboard()
    {
        $tanggapan = Tanggapan::where('petugas_nik', Auth::user()->nik)->orderBy('created_at', 'desc')->get();
        return view('petugas.dashboard', compact('tanggapan'));
    }
    //dft pengaduan
    public function pengaduan()
    {
        $pengaduan = Pengaduan::where('status', '0')->orderBy('created_at', 'desc')->get();
        return view('petugas.dft-aduan', compact('pengaduan'));
    }
    //proses
    public function proses($id)
    {
        $edit = Pengaduan::where('id', $id)->first();
        $edit->status = "proses";
        Tanggapan::create([
            'pengaduan_id' => $id,
            'petugas_nik' => Auth::user()->nik,
        ]);
        $edit->save();
        return redirect('/petugas-dashboard');
    }
    //tindak lanjut
    public function tindaklanjut($id)
    {
        return view('petugas.petugas-laporan', compact('id'));
    }
    //create laporan
    public function postlaporan(Request $request, $id)
    {
        $request->validate([
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5048'
        ]);
        $input = $request->all();
        $imageName = time() . '.' . request()->foto->getClientOriginalExtension();
        $input['foto'] = $imageName;
        request()->foto->move(public_path('imagesDB'), $imageName);

        $edit = Tanggapan::where('id', $id)->first();
        $edit->tanggapan = $input['tanggapan'];
        $edit->foto = $input['foto'];
        $edit->tgl_tanggapan = $input['tgl_tanggapan'];
        $edit->save();

        $editp = Pengaduan::where('id', $edit->pengaduan_id)->first();
        $editp->status = "selesai";
        $editp->save();
        return redirect('/petugas-dashboard');
    }
    //ptg profilr
    public function profile()
    {
        return view('petugas.profile');
    }
    //ptg detail
    public function detail($id)
    {
        $tanggapan = Tanggapan::where('id', $id)->get();
        return view('petugas.detail', compact('tanggapan'));
    }
    //validate
    public function validasi($id)
    {
        $aduan = Pengaduan::where('id', $id)->first();
        $aduan->status = "ditolak";
        $aduan->save();
        return redirect('/petugas-dashboard');
    }
}
