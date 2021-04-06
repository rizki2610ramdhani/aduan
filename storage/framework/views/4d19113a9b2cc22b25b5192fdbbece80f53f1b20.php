<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Login</h2>
								<p class="mb-0">Sebelum mengakses website, login terlebih dahulu.</p>
							</div>
							<div class="p-40">
								<form action="/login" method="post">
                                <?php echo csrf_field(); ?>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input name="username" required type="text" class="form-control pl-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input name="password" required type="password" class="form-control pl-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary mt-10">Login</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Belum memiliki akun? <a href="<?php echo e(url('/register')); ?>" class="text-warning ml-5">Daftar</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('templates.masyarakat-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/masyarakat/login.blade.php ENDPATH**/ ?>