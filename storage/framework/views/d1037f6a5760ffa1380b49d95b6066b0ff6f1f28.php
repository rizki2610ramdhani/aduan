<?php $__env->startSection('title', 'Histori Petugas'); ?>
<?php $__env->startSection('judul', 'Histori Petugas'); ?>
<?php $__env->startSection('content'); ?>
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<?php echo e(count($histori)); ?>

								</div>
								<div class="sale-num">
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
									<div class="card-title">Histori Petugas</div>
								</div>
								<div class="card-body">
                                    <?php if(count($histori)>0): ?>
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pengadu</th>
                                                        <th>No Telpon</th>
                                                        <th>Judul</th>
                                                        <th>Tgl Aduan</th>
                                                        <th>Foto Aduan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $histori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($hst->pengaduan->masyarakat->nama); ?></td>
                                                        <td><?php echo e($hst->pengaduan->masyarakat->telp); ?></td>
                                                        <td><?php echo e($hst->pengaduan->judul); ?></td>
                                                        <td><?php echo e($hst->pengaduan->tgl_aduan); ?></td>
                                                        <td><div class="avatar sm">
                                                            <img src="<?php echo e(asset('imagesDB/' . $hst->pengaduan->foto)); ?>" class="rounded" alt="Tycoon Admin">
                                                        </div></td>
                                                        <?php if($hst->pengaduan->status == 'selesai'): ?>
									                        <td><span class="badge badge-pill badge-success">Selesai</span></td>
								                        <?php elseif($hst->pengaduan->status == 'proses'): ?>
									                        <td><span class="badge badge-pill badge-info">Diproses</span></td>
                                                            <?php elseif($hst->pengaduan->status == 'ditolak'): ?>
									                        <td><span class="badge badge-pill badge-danger">Ditolak</span></td>
								                        <?php else: ?>
									                        <td><span class="badge badge-pill badge-warning">Belum Diproses</span></td>
								                        <?php endif; ?>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                        <p>Belum ada satupun adaun ditanggapi</p>
                                    <?php endif; ?>
								</div>
							</div>
						</div>
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/admin/histori-ptg.blade.php ENDPATH**/ ?>