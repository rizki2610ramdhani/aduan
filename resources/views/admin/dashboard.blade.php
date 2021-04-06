@extends('templates.admin')
@section('title', 'Dashboard Admin')
@section('judul', 'Admin Dashboard')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-inbox"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($admin)}}</h3>
									<p>Admin</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon danger">
									<i class="icon-record_voice_over"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($petugas)}}</h3>
									<p>Petugas</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon warning">
									<i class="icon-wc"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($masyarakat)}}</h3>
									<p>Masyarakat</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon success">
									<i class="icon-edit1"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($pengaduan)}}</h3>
									<p>Aduan</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Aduan Terbaru | <a class="btn btn-primary" href="/admin-cetak-laporan">Cetak Laporan</a></div>
								</div>
								<div class="card-body">
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Username</th>
                                                        <th>Judul Aduan</th>
                                                        <th>Status</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($adt as $ad)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$ad->masyarakat->nik}}</td>
                                                        <td>{{$ad->masyarakat->nama}}</td>
                                                        <td>{{$ad->masyarakat->username}}</td>
                                                        <td>{{$ad->judul}}</td>
                                                        @if($ad->status == 'selesai')
                                                        <td><span class="badge badge-success">Selesai</span></td>
								                        @elseif($ad->status == 'proses')
                                                        <td><span class="badge badge-info">Diproses</span></td>
                                                        @elseif($ad->status == 'ditolak')
                                                        <td><span class="badge badge-danger">Ditolak</span></td>
								                        @else
                                                        <td><span class="badge badge-warning">Belum Diproses</span></td>
								                        @endif
                                                        <td><i class="icon-today"></i> {{$ad->tgl_aduan}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
@endsection
