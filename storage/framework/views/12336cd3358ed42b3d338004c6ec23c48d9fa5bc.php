<?php $__env->startSection('title', 'Daftar Aduan'); ?>
<?php $__env->startSection('judul', 'Daftar Aduan'); ?>
<?php $__env->startSection('content'); ?>

					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar aduan
                                        <?php $__currentLoopData = $aduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($aa->masyarakat->nama); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
								</div>
								<div class="card-body">
                                    <?php if(count($aduan)>0): ?>
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
                                                    <?php $__currentLoopData = $aduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($ad->judul); ?></td>
                                                        <td><?php echo e($ad->tgl_aduan); ?></td>
                                                        <td>
                                                            <div class="avatar sm">
                                                            <img src="<?php echo e(asset('imagesDB/' . $ad->foto)); ?>" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        <?php if($ad->status == 'selesai'): ?>
									                        <td><span class="badge badge-pill badge-success">Selesai</span></td>
								                        <?php elseif($ad->status == 'proses'): ?>
									                        <td><span class="badge badge-pill badge-info">Diproses</span></td>
                                                            <?php elseif($ad->status == 'proses'): ?>
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
                                        <p>Belum menulis satu aduan pun</p>
                                    <?php endif; ?>
								</div>
							</div>
						</div>
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/admin/show-aduan.blade.php ENDPATH**/ ?>