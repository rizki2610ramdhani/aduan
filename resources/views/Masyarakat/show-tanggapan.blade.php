
@extends('templates.masyarakat')
@section('title', 'Detail Tanggapan')
@section('judul', 'Detail Tanggapan')

@foreach($tanggapan as $tgp)
    @section('subjudul')
        <h5><a href="/masyarakat-dashboard">Dashboard</a> / Detail Tanggapan</h5>
    @endsection

    @section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box box-body b-1 text-center no-shadow">
                    <img src="{{asset('imagesDB/' . $tgp->foto)}}" id="product-image " class="img-fluid" alt="">
                </div>
                <div class="pro-photos">

                </div>
                <div class="clear">

                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <h2 class="box-title mt-0">Tanggapan</h2>
                <div class="input-group">
                    <ul class="icolors">
                            <p class="badge badge-pill badge-success">Selesai</p>
                    </ul>
                </div>
                <hr>
                <p>{{$tgp->tanggapan}}</p>
                <div class="row">
                </div>
                <hr>
                <h5 class="box-title mt-20"><i class="fa fa-calendar-o"></i> {{$tgp->tgl_tanggapan}}</h5>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="box-title mt-40">Detail Petugas</h4>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="390">NIK</td>
                                <td> {{$tgp->petugas->nik}} </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> {{$tgp->petugas->nama}} </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td> {{$tgp->petugas->username}} </td>
                            </tr>
                            <tr>
                                <td>No. Telepon</td>
                                <td> {{$tgp->petugas->telp}} </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
@endforeach
