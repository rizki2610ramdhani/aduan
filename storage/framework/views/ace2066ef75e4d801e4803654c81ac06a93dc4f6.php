<?php $__env->startSection('title', 'Edit Profile'); ?>
<?php $__env->startSection('judul', 'Edit Profile'); ?>
<?php $__env->startSection('subjudul', 'Form edit'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
						<!-- /.box-header -->
                        <h5>Anda hanya dapat mengubah beberapa data!</h5>
						<form class="form" action="/masyarakat-edit-profile" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if($errors->any()): ?>
									<div class="alert alert-danger">
										<ul>
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($error); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
							<?php endif; ?>

                            <div class="box-body">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Nik</label>
									  <input name="nik" type="text" class="form-control" value="<?php echo e(Auth::user()->nik); ?>" readonly>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Nama</label>
									  <input name="nama" type="text" class="form-control" value="<?php echo e(Auth::user()->nama); ?>" >
									</div>
								  </div>
                                  <div class="col-md-6">
									<div class="form-group">
									  <label>Username</label>
									  <input name="username" type="text" class="form-control" value="<?php echo e(Auth::user()->username); ?>" readonly>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>No. Telepon</label>
									  <input name="telp" type="text" class="form-control" value="<?php echo e(Auth::user()->telp); ?>" readonly>
									</div>
								  </div>
                                  <div class="form-group">
                                    <label>Foto Profile</label>
                                    <label class="file">
                                      <input name="foto" type="file" id="file" value="<?php echo e(Auth::user()->foto); ?>">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/masyarakat/edit-profile.blade.php ENDPATH**/ ?>