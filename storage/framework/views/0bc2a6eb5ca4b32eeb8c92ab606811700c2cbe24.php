<?php $__env->startSection('title', 'Dashboard Petugas'); ?>
<?php $__env->startSection('judul', 'Petugas Dashboard'); ?>
<?php $__env->startSection('content'); ?>
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-inbox"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($tanggapan)); ?></h3>
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
									<div class="card-title">Daftar Tanggapan</div>
								</div>
								<div class="card-body">
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pelapor</th>
                                                        <th>Judul Aduan</th>
                                                        <th>Tanggal Aduan</th>
                                                        <th>Tanggal Tanggapan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tgp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($tgp->pengaduan->masyarakat->nama); ?></td>
                                                        <td><?php echo e($tgp->pengaduan->judul); ?></td>
                                                        <td><i class="icon-insert_invitation"></i> <?php echo e($tgp->pengaduan->tgl_aduan); ?></td>
                                                        <?php if($tgp->pengaduan->status == 'selesai'): ?>
                                                        <td><i class="icon-insert_invitation"></i> <?php echo e($tgp->tgl_tanggapan); ?></td>
                                                        <td><a href="/petugas-detail/<?php echo e($tgp->id); ?>"><span class="badge badge-success">Selesai</span></a></td>
								                        <?php elseif($tgp->pengaduan->status == 'proses'): ?>
                                                        <td><a href="/petugas-laporan/<?php echo e($tgp->id); ?>" class="btn btn-success">Tindak lanjut Laporan</a></td>
                                                        <td><a href="/petugas-detail/<?php echo e($tgp->id); ?>"><span class="badge badge-warning">Diproses</span></a></td>
                                                        <?php else: ?>
                                                        <td>Tidak lulus validasi kriteria</td>
                                                        <td><a href="/petugas-detail/<?php echo e($tgp->id); ?>"><span class="badge badge-danger">Ditolak</span></a></td>
								                        <?php endif; ?>
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

<?php echo $__env->make('templates.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/petugas/dashboard.blade.php ENDPATH**/ ?>