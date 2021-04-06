@extends('templates.admin')
@section('title', 'Detail Aduan')
@section('judul', 'Detail Aduan')
@section('content')
@foreach($detail as $dt)
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            @if($dt->status == 'selesai')
            <div class="info-icon success">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Selesai</h3>
                <p>Proses</p>
            </div>
			@elseif($dt->status == 'proses')
            <div class="info-icon info">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Diproses</h3>
                <p>Proses</p>
            </div>
            @elseif($dt->status == 'ditolak')
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
                        <td>{{$dt->masyarakat->nik}}</td>
                        <td rowspan="6">
                            <img src="{{ asset('imagesDB/' . $dt->foto) }}" class="img-fluid" alt="Tycoon Admin">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td>{{$dt->masyarakat->nama}}</td>
                    </tr>
                    <tr>
                        <td>Judul</td><td>:</td>
                        <td>{{$dt->judul}}</td>
                    </tr>
                    <tr>
                        <td>Aduan</td><td>:</td>
                        <td>{{$dt->aduan}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td><td>:</td>
                        <td>{{$dt->tgl_aduan}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@if($dt->status == '0')

@elseif($dt->status == 'ditolak')

@elseif($dt->status == 'proses')
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tanggapan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    @foreach($tanggapan as $tg)
                    <tr>
                        <td rowspan="6">

                        </td>
                        <td>NIK Petugas</td>
                        <td>:</td>
                        <td>{{$tg->petugas->nik}}</td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td> <td>:</td>
                        <td>{{$tg->petugas->nama}}</td>
                    </tr>
                    <tr>
                        <td>Username Petugas</td>
                        <td>:</td>
                        <td>{{$tg->petugas->username}}</td>
                    </tr>
                    <tr>
                        <td>No Telepon Petugas</td> <td>:</td>
                        <td>{{$tg->petugas->telp}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Tanggapan</td><td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Tanggapan</td><td>:</td>
                        <td>-</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tanggapan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    @foreach($tanggapan as $tg)
                    <tr>
                        <td rowspan="4">
                            <img src="{{ asset('imagesDB/' . $tg->foto) }}" class="img-fluid" alt="Tycoon Admin">
                        </td>
                        <td>NIK Petugas</td>
                        <td>:</td>
                        <td>{{$tg->petugas->nik}}</td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td> <td>:</td>
                        <td>{{$tg->petugas->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Tanggapan</td><td>:</td>
                        <td>{{$tg->tgl_tanggapan}}</td>
                    </tr>
                    <tr>
                        <td>Tanggapan</td><td>:</td>
                        <td>{{$tg->tanggapan}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection
