@extends('templates.masyarakat-auth')
@section('title', 'Daftar')
@section('content')
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Daftar</h2>
								<p class="mb-0">Buat akun baru mu disini.</p>
							</div>
							<div class="p-40">
								<form action="{{url('/register')}}" method="post" enctype="multipart/form-data">
                                @csrf
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
									<div class="form-group">
										<div class="input-group mb-3">
											<input name="nik" required min="0" type="number" class="form-control pl-15 bg-transparent" placeholder="NIK">
										</div>
									</div>
                                    <div class="form-group">
										<div class="input-group mb-3">
											<input name="nama" required type="text" class="form-control pl-15 bg-transparent" placeholder="Nama">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<input name="username" required type="text" class="form-control pl-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<input name="password" required type="password" class="form-control pl-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<input type="number" name="telp" required min="0" class="form-control pl-15 bg-transparent" placeholder="No. Handphone">
										</div>
									</div>
                                    <div class="form-group">
                                        <label>Foto</label>
								        <label class="file">
									    <input name="foto" type="file" id="file">
								        </label>
                                    </div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">Daftar</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Sudah memiliki akun?<a href="/login" class="text-danger ml-5"> Login</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
