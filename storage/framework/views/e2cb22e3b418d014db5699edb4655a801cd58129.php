<?php $__env->startSection('title', 'Daftar Aduan'); ?>
<?php $__env->startSection('judul', 'Daftar Aduan'); ?>
<?php $__env->startSection('content'); ?>

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon Danger">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3><?php echo e(count($pengaduan)); ?></h3>
                <p>Pengaduan Belum Diproses</p>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title text-danger">Daftar Pengaduan Yang Belum Diproses</div>
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
                                                          <th>Aksi</th>
                                                    </tr>
                                                    <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $au): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($au->masyarakat->nik); ?></td>
                                                        <td><?php echo e($au->masyarakat->nama); ?></td>
                                                        <td><?php echo e($au->judul); ?></td>
                                                        <td><i class="fa fa-calendar-o"></i> <?php echo e($au->tgl_aduan); ?></td>
                                                        <td><a class="btn btn-info" href="/petugas-proses/<?php echo e($au->id); ?>" onClick="return confirm('Apakah anda yakin ingin menanggapi aduan?')">Tanggapi</a></td>
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

<?php echo $__env->make('templates.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/petugas/dft-aduan.blade.php ENDPATH**/ ?>