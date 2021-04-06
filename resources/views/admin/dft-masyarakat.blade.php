@extends('templates.admin')
@section('title', 'Daftar Masyarakat')
@section('judul', 'Daftar Masyarakat')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-wc"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($masyarakat)}}</h3>
									<p>Masyarakat</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Masyarakat</div>
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
                                                        <th>No Telpon</th>
                                                        <th>Foto</th>
                                                        <th>Jumlah Pengaduan</th>
                                                        <th>Pendaftaran</th>
                                                        <th>Promote</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($masyarakat as $msy)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$msy->nik}}</td>
                                                        <td>{{$msy->nama}}</td>
                                                        <td>{{$msy->username}}</td>
                                                        <td>{{$msy->telp}}</td>
                                                        <td>
                                                            <div class="avatar sm">
                                                                <img src="{{ asset('imagesProfile/' . $msy->foto) }}" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><a href="/show-ad/{{$msy->nik}}" class="btn btn-warning"><i class="icon-paperclip"></i> {{count($msy->pengaduan)}} Aduan</a></td>
                                                        <td><i class="icon-today"></i> {{$msy->created_at}}</td>
                                                        <td>
                                                        <a href="/admin-add-petugas/{{$msy->nik}}" class="btn btn-success"
                                                            onClick="return confirm('Promosi berarti menaikan status masyarakat dengan nama {{$msy->nama}} menjadi seorang petugas, Apakah anda yakin?')">
                                                            <i class="icon-add-user"></i> Jadikan Petugas</a><br>
                                                        <a class="btn btn-danger" href="/admin-dlt-msy/{{$msy->nik}}" onClick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="icon-trash"></i> Hapus</a>
                                                        </td>
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
