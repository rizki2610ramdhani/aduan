@extends('templates.masyarakat')
@section('title', 'Dashboard Masyarakat')
@section('judul', 'Dashboard')
@section('subjudul', 'Daftar Aduan Saya')
@section('content')

	@if(count($aduanuser) > 0)
	<div class="col-12">
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Table daftar aduan</h4>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
					<table class="table table-hover">
						<tbody>
							<tr>
						  		<th>No</th>
						  		<th>Judul</th>
						  		<th>Tanggal Aduan</th>
						  		<th>Status</th>
						  		<th>Aksi</th>
							</tr>
							@foreach($aduanuser as $au)
							<tr>
						 		<td>{{$loop->iteration}}</td>
						  		<td>{{$au->judul}}</td>
						  		<td><i class="fa fa-calendar-o"></i> {{$au->tgl_aduan}}</td>

								@if($au->status == 'selesai')
									<td><span class="badge badge-pill badge-success">Selesai</span></td>
								@elseif($au->status == 'proses')
									<td><span class="badge badge-pill badge-info">Diproses</span></td>
                                    @elseif($au->status == 'ditolak')
									<td><span class="badge badge-pill badge-danger">Ditolak</span></td>
								@else
									<td><span class="badge badge-pill badge-warning">Belum Diproses</span></td>
								@endif
								<td><a class="btn btn-info" href="/masyarakat-show-aduan/{{$au->id}}"><i class="fa fa-id-card"></i> Detail</a></td>
							</tr>
							@endforeach
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@else
	<p>Belum Ada aduan terdaftar, segera buat aduan anda pada form pengaduan</p>


@endif
@endsection
