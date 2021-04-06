@extends('templates.masyarakat')
@section('title', 'Edit Profile')
@section('judul', 'Edit Profile')
@section('subjudul', 'Form edit')
@section('content')
<div class="col-12">
						<!-- /.box-header -->
                        <h5>Anda hanya dapat mengubah beberapa data!</h5>
						<form class="form" action="/masyarakat-edit-profile" method="post" enctype="multipart/form-data">
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

                            <div class="box-body">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Nik</label>
									  <input name="nik" type="text" class="form-control" value="{{Auth::user()->nik}}" readonly>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Nama</label>
									  <input name="nama" type="text" class="form-control" value="{{Auth::user()->nama}}" >
									</div>
								  </div>
                                  <div class="col-md-6">
									<div class="form-group">
									  <label>Username</label>
									  <input name="username" type="text" class="form-control" value="{{Auth::user()->username}}" readonly>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>No. Telepon</label>
									  <input name="telp" type="text" class="form-control" value="{{Auth::user()->telp}}" readonly>
									</div>
								  </div>
                                  <div class="form-group">
                                    <label>Foto Profile</label>
                                    <label class="file">
                                      <input name="foto" type="file" id="file" value="{{Auth::user()->foto}}">
                                    </label>
                                  </div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<a href="/masyarakat-profile" type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</a>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline" >
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>

					  <!-- /.box -->
				</div>
@endsection
