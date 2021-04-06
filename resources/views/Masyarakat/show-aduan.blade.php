
@extends('templates.masyarakat')
@section('title', 'Detail Aduan')
@section('judul', 'Detail Aduan')

@foreach($aduan as $ad)
    @section('subjudul')
        <h5><a href="/masyarakat-dashboard">Dashboard</a> / Detail Aduan</h5>
    @endsection

    @section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box box-body b-1 text-center no-shadow">
                    <img src="{{asset('imagesDB/' . $ad->foto)}}" id="product-image " class="img-fluid" alt="">
                </div>
                <div class="pro-photos">

                </div>
                <div class="clear">

                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <h2 class="box-title mt-0">{{$ad->judul}}</h2>
                <div class="input-group">
                    <ul class="icolors">
                        @if($ad->status == 'selesai')
                            <p class="badge badge-pill badge-success">Selesai</p>
						@elseif($ad->status == 'proses')
                            <p class="badge badge-pill badge-info">Diproses</p>
                            @elseif($ad->status == 'ditolak')
                            <p class="badge badge-pill badge-danger">Ditolak</p>
						@else
                            <p class="badge badge-pill badge-warning">Belum Diproses</p>
						@endif
                    </ul>
                </div>
                <hr>
                <p>{{$ad->aduan}}</p>
                <div class="row">
                </div>
                <hr>
                <h5 class="box-title mt-20"><i class="fa fa-calendar-o"></i> {{$ad->tgl_aduan}}</h5>
                @if($ad->status == 'selesai')
                | <a href="/masyarakat-tanggapan/{{$ad->id}}" class="btn btn-info">Lihat Tanggapan</a>
				@else

				@endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="box-title mt-40">Detail Pelapoor</h4>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="390">NIK</td>
                                <td> {{Auth::user()->nik}} </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> {{Auth::user()->nama}} </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td> {{Auth::user()->username}} </td>
                            </tr>
                            <tr>
                                <td>No. Telepon</td>
                                <td> {{Auth::user()->telp}} </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
@endforeach
