<?php $__env->startSection('title', 'Tulis Aduan'); ?>
<?php $__env->startSection('judul', 'Form Pengaduan'); ?>
<?php $__env->startSection('subjudul', 'Tulis aduan mu disini!'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
						<!-- /.box-header -->
						<form class="form" action="/masyarakat-aduan" method="post" enctype="multipart/form-data">
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
									  <label>Judul</label>
									  <input name="judul" type="text" class="form-control" placeholder="Judul Aduan">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Tanggal Aduan</label>
									  <input name="tgl_aduan" type="text" class="form-control" value="<?php echo e(date('Y-m-d')); ?>" readonly>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <label>Bukti Foto</label>
								  <label class="file">
									<input name="foto" type="file" id="file">
								  </label>
								</div>
								<div class="form-group">
								  <label>Aduan</label>
								  <textarea name="aduan" rows="5" class="form-control" placeholder="Isi Aduan"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<a href="/masyarakat-dashboard" type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</a>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline" onClick="return confirm('Setelah membuat laporan, pengguna tidak dapat MENGEDIT ataupun MENGHAPUS aduan yang telah dibuat. Pastikan kembali Anda sudah menulis aduan dengan benar')">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>

					  <!-- /.box -->
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/masyarakat/create-aduan.blade.php ENDPATH**/ ?>