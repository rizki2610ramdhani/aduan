@extends('templates.admin')
@section('title', 'Daftar Aduan')
@section('judul', 'Daftar Aduan')
@section('content')

					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar aduan
                                        @foreach($aduan as $aa)
                                            {{$aa->masyarakat->nama}}
                                        @endforeach
                                    </div>
								</div>
								<div class="card-body">
                                    @if(count($aduan)>0)
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Tanggal Aduan</th>
                                                        <th>Foto Aduan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($aduan as $ad)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$ad->judul}}</td>
                                                        <td>{{$ad->tgl_aduan}}</td>
                                                        <td>
                                                            <div class="avatar sm">
                                                            <img src="{{ asset('imagesDB/' . $ad->foto) }}" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        @if($ad->status == 'selesai')
									                        <td><span class="badge badge-pill badge-success">Selesai</span></td>
								                        @elseif($ad->status == 'proses')
									                        <td><span class="badge badge-pill badge-info">Diproses</span></td>
                                                            @elseif($ad->status == 'proses')
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
                                        <p>Belum menulis satu aduan pun</p>
                                    @endif
								</div>
							</div>
						</div>
					</div>
@endsection
