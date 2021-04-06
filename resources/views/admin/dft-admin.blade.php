@extends('templates.admin')
@section('title', 'Daftar Admin')
@section('judul', 'Daftar Admin')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-record_voice_over"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($admin)}}</h3>
									<p>Admin</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Admin</div>
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($admin as $adm)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$adm->nik}}</td>
                                                        <td>{{$adm->nama}}</td>
                                                        <td>{{$adm->username}}</td>
                                                        <td>{{$adm->telp}}</td>
                                                        <td>
                                                            <div class="avatar sm">
                                                                <img src="{{ asset('imagesProfile/' . $adm->foto) }}" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        <td><i class="icon-today"></i> {{$adm->created_at}}</td>
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
