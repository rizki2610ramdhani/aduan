@extends('templates.admin')
@section('title', 'Histori Petugas')
@section('judul', 'Histori Petugas')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									{{count($histori)}}
								</div>
								<div class="sale-num">
									<p>Aduan Ditanggapi</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Histori Petugas</div>
								</div>
								<div class="card-body">
                                    @if(count($histori)>0)
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pengadu</th>
                                                        <th>No Telpon</th>
                                                        <th>Judul</th>
                                                        <th>Tgl Aduan</th>
                                                        <th>Foto Aduan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($histori as $hst)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$hst->pengaduan->masyarakat->nama}}</td>
                                                        <td>{{$hst->pengaduan->masyarakat->telp}}</td>
                                                        <td>{{$hst->pengaduan->judul}}</td>
                                                        <td>{{$hst->pengaduan->tgl_aduan}}</td>
                                                        <td><div class="avatar sm">
                                                            <img src="{{ asset('imagesDB/' . $hst->pengaduan->foto) }}" class="rounded" alt="Tycoon Admin">
                                                        </div></td>
                                                        @if($hst->pengaduan->status == 'selesai')
									                        <td><span class="badge badge-pill badge-success">Selesai</span></td>
								                        @elseif($hst->pengaduan->status == 'proses')
									                        <td><span class="badge badge-pill badge-info">Diproses</span></td>
                                                            @elseif($hst->pengaduan->status == 'ditolak')
									                        <td><span class="badge badge-pill badge-danger">Ditolak</span></td>
								                        @else
									                        <td><span class="badge badge-pill badge-warning">Belum Diproses</span></td>
								                        @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @else
                                        <p>Belum ada satupun adaun ditanggapi</p>
                                    @endif
								</div>
							</div>
						</div>
					</div>
@endsection
