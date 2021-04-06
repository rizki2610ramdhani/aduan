@extends('templates.petugas')
@section('title', 'Daftar Aduan')
@section('judul', 'Daftar Aduan')
@section('content')

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon Danger">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>{{count($pengaduan)}}</h3>
                <p>Pengaduan Belum Diproses</p>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title text-danger">Daftar Pengaduan Yang Belum Diproses</div>
								</div>
								<div class="card-body">
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <tbody>
                                                    <tr>
                                                          <th>No</th>
                                                          <th>NIK</th>
                                                          <th>Nama</th>
                                                          <th>Judul</th>
                                                          <th>Tanggal Aduan</th>
                                                          <th>Aksi</th>
                                                    </tr>
                                                    @foreach($pengaduan as $au)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$au->masyarakat->nik}}</td>
                                                        <td>{{$au->masyarakat->nama}}</td>
                                                        <td>{{$au->judul}}</td>
                                                        <td><i class="fa fa-calendar-o"></i> {{$au->tgl_aduan}}</td>
                                                        <td><a class="btn btn-info" href="/petugas-proses/{{$au->id}}" onClick="return confirm('Apakah anda yakin ingin menanggapi aduan?')">Tanggapi</a></td>
                                                    </tr>
                                                    @endforeach
                                                  </tbody>
                                            </table>
                                            </table>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
@endsection
