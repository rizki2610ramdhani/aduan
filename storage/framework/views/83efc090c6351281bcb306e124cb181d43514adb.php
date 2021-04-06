<?php $__env->startSection('title', 'Daftar Petugas'); ?>
<?php $__env->startSection('judul', 'Daftar Petugas'); ?>
<?php $__env->startSection('content'); ?>
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon info">
									<i class="icon-record_voice_over"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo e(count($petugas)); ?></h3>
									<p>Petugas</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Daftar Petugas</div>
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
                                                        <th>No Telpon</th>
                                                        <th>Foto</th>
                                                        <th>Pendaftaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ptg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($ptg->nik); ?></td>
                                                        <td><?php echo e($ptg->nama); ?></td>
                                                        <td><?php echo e($ptg->username); ?></td>
                                                        <td><?php echo e($ptg->telp); ?></td>
                                                        <td>
                                                            <div class="avatar sm">
                                                                <img src="<?php echo e(asset('imagesProfile/' . $ptg->foto)); ?>" class="rounded" alt="Tycoon Admin">
                                                            </div>
                                                        </td>
                                                        <td><i class="icon-today"></i> <?php echo e($ptg->created_at); ?></td>
                                                        <td>
                                                            <a href="/admin-ptg-histori/<?php echo e($ptg->nik); ?>" class="btn btn-success"><i class="icon-folder"></i>Histori Tugas</a>
                                                            <a class="btn btn-danger" href="/admin-dlt-ptg/<?php echo e($ptg->nik); ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="icon-trash"></i> Hapus</a>
                                                        </td>
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

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/admin/dft-petugas.blade.php ENDPATH**/ ?>