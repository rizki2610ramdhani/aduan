@extends('templates.petugas')
@section('title', 'Detail Aduan')
@section('judul', 'Detail Aduan')
@section('content')
@foreach($tanggapan as $tgp)
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            @if($tgp->pengaduan->status == 'selesai')
            <div class="info-icon success">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Selesai</h3>
                <p>Proses</p>
            </div>
			@elseif($tgp->pengaduan->status == 'proses')
            <div class="info-icon info">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Diproses</h3>
                <p>Proses</p>
            </div>
            @elseif($tgp->pengaduan->status == 'ditolak')
            <div class="info-icon danger">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Ditolak</h3>
                <p>Proses</p>
            </div>
			@else
            <div class="info-icon warning">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Belum Diproses</h3>
                <p>Proses</p>
            </div>
			@endif
        </div>
    </div>
    @if($tgp->pengaduan->status == 'proses')
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon danger">
                <i class="icon-x-circle"></i>
            </div>
            <div class="sale-num">
                <a href="/petugas-validate/{{$tgp->pengaduan_id}}">
                <h3>Tidak lulusn</h3>
                <p>penilaian kriteria aduan</p>
            </a>
            </div>
        </div>
    </div>
    @else

    @endif
</div>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Aduan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{$tgp->pengaduan->masyarakat->nik}}</td>
                        <td rowspan="6">
                            <img src="{{ asset('imagesDB/' . $tgp->pengaduan->foto) }}" class="img-fluid" alt="Tycoon Admin">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td>{{$tgp->pengaduan->masyarakat->nama}}</td>
                    </tr>
                    <tr>
                        <td>Judul</td><td>:</td>
                        <td>{{$tgp->pengaduan->judul}}</td>
                    </tr>
                    <tr>
                        <td>Aduan</td><td>:</td>
                        <td>{{$tgp->pengaduan->aduan}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td><td>:</td>
                        <td>{{$tgp->pengaduan->tgl_aduan}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection
