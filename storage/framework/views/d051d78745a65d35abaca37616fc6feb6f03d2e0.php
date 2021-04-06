<?php $__env->startSection('title', 'Daftar Aduan'); ?>
<?php $__env->startSection('judul', 'Daftar Aduan'); ?>
<?php $__env->startSection('content'); ?>

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon info">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3><?php echo e(count($pengaduan)); ?></h3>
                <p>Pengaduan</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon success">
                <i class="icon-check-circle"></i>
            </div>
            <div class="sale-num">
                <h3><?php echo e(count($sls)); ?></h3>
                <p>Selesai</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon warning">
                <i class="icon-minus-circle"></i>
            </div>
            <div class="sale-num">
                <h3><?php echo e(count($prs)); ?></h3>
                <p>Diproses</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon danger">
                <i class="icon-x-circle"></i>
            </div>
            <div class="sale-num">
                <h3><?php echo e(count($blm)); ?></h3>
                <p>Belum Diproses</p>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Pengaduan Masyarakat</div>
								</div>
								<div class="card-body">
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <tbody>
                                                    <tr>
                                                          <th>No</th>
                                                          <th>NIK</th>
                                                          <th>Nama</th>
                                                          <th>Judul</th>
                                                          <th>Tanggal Aduan</th>
                                                          <th>Status</th>
                                                    </tr>
                                                    <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $au): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                         <td><?php echo e($loop->iteration); ?></td>
                                                         <td><?php echo e($au->masyarakat->nik); ?></td>
                                                         <td><?php echo e($au->masyarakat->nama); ?></td>
                                                          <td><?php echo e($au->judul); ?></td>
                                                          <td><i class="fa fa-calendar-o"></i> <?php echo e($au->tgl_aduan); ?></td>
                                                        <?php if($au->status == 'selesai'): ?>
                                                            <td><a href="/admin-proses/<?php echo e($au->id); ?>"><span class="badge badge-pill badge-success">Selesai</span></a></td>
                                                        <?php elseif($au->status == 'proses'): ?>
                                                            <td><a href="/admin-proses/<?php echo e($au->id); ?>"><span class="badge badge-pill badge-info">Diproses</span></a></td>
                                                        <?php elseif($au->status == 'ditolak'): ?>
                                                            <td><a href="/admin-proses/<?php echo e($au->id); ?>"><span class="badge badge-pill badge-danger">Ditolak</span></a></td>
                                                        <?php else: ?>
                                                            <td><a href="/admin-proses/<?php echo e($au->id); ?>"><span class="badge badge-pill badge-warning">Belum Diproses</span></a></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </tbody>
                                            </table>
                                            </table>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/admin/dft-aduan.blade.php ENDPATH**/ ?>