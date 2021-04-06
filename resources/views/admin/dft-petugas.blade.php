@extends('templates.admin')
@section('title', 'Daftar Petugas')
@section('judul', 'Daftar Petugas')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-record_voice_over"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($petugas)}}</h3>
									<p>Petugas</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Petugas</div>
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
                                                        <th>Pendaftaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($petugas as $ptg)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$ptg->nik}}</td>
                                                        <td>{{$ptg->nama}}</td>
                                                        <td>{{$ptg->username}}</td>
                                                        <td>{{$ptg->telp}}</td>
                                                        <td>
                                                            <div class="avatar sm">
                                                                <img src="{{ asset('imagesProfile/' . $ptg->foto) }}" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        <td><i class="icon-today"></i> {{$ptg->created_at}}</td>
                                                        <td>
                                                            <a href="/admin-ptg-histori/{{$ptg->nik}}" class="btn btn-success"><i class="icon-folder"></i>Histori Tugas</a>
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
