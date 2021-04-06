@extends('templates.petugas')
@section('title', 'Dashboard Petugas')
@section('judul', 'Petugas Dashboard')
@section('content')
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-inbox"></i>
								</div>
								<div class="sale-num">
									<h3>{{count($tanggapan)}}</h3>
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
									<div class="card-title">Daftar Tanggapan</div>
								</div>
								<div class="card-body">
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pelapor</th>
                                                        <th>Judul Aduan</th>
                                                        <th>Tanggal Aduan</th>
                                                        <th>Tanggal Tanggapan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($tanggapan as $tgp)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$tgp->pengaduan->masyarakat->nama}}</td>
                                                        <td>{{$tgp->pengaduan->judul}}</td>
                                                        <td><i class="icon-insert_invitation"></i> {{$tgp->pengaduan->tgl_aduan}}</td>
                                                        @if($tgp->pengaduan->status == 'selesai')
                                                        <td><i class="icon-insert_invitation"></i> {{$tgp->tgl_tanggapan}}</td>
                                                        <td><a href="/petugas-detail/{{$tgp->id}}"><span class="badge badge-success">Selesai</span></a></td>
								                        @elseif($tgp->pengaduan->status == 'proses')
                                                        <td><a href="/petugas-laporan/{{$tgp->id}}" class="btn btn-success">Tindak lanjut Laporan</a></td>
                                                        <td><a href="/petugas-detail/{{$tgp->id}}"><span class="badge badge-warning">Diproses</span></a></td>
                                                        @else
                                                        <td>Tidak lulus validasi kriteria</td>
                                                        <td><a href="/petugas-detail/{{$tgp->id}}"><span class="badge badge-danger">Ditolak</span></a></td>
								                        @endif
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
