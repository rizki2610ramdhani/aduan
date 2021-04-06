<?php $__env->startSection('title', 'Dashboard Admin'); ?>
<?php $__env->startSection('judul', 'Admin Dashboard'); ?>
<?php $__env->startSection('content'); ?>
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-inbox"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($admin)); ?></h3>
									<p>Admin</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon danger">
									<i class="icon-record_voice_over"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($petugas)); ?></h3>
									<p>Petugas</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon warning">
									<i class="icon-wc"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($masyarakat)); ?></h3>
									<p>Masyarakat</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon success">
									<i class="icon-edit1"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($pengaduan)); ?></h3>
									<p>Aduan</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Aduan Terbaru</div>
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
                                                        <th>Judul Aduan</th>
                                                        <th>Status</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $adt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($ad->masyarakat->nik); ?></td>
                                                        <td><?php echo e($ad->masyarakat->nama); ?></td>
                                                        <td><?php echo e($ad->masyarakat->username); ?></td>
                                                        <td><?php echo e($ad->judul); ?></td>
                                                        <?php if($ad->status == 'selesai'): ?>
                                                        <td><span class="badge badge-success">Selesai</span></td>
								                        <?php elseif($ad->status == 'proses'): ?>
                                                        <td><span class="badge badge-info">Diproses</span></td>
                                                        <?php elseif($ad->status == 'ditolak'): ?>
                                                        <td><span class="badge badge-danger">Ditolak</span></td>
								                        <?php else: ?>
                                                        <td><span class="badge badge-warning">Belum Diproses</span></td>
								                        <?php endif; ?>
                                                        <td><i class="icon-today"></i> <?php echo e($ad->tgl_aduan); ?></td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>