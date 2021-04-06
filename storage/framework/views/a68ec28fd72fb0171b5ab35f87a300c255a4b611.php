<?php $__env->startSection('title', 'Dashboard Masyarakat'); ?>
<?php $__env->startSection('judul', 'Dashboard'); ?>
<?php $__env->startSection('subjudul', 'Daftar Aduan Saya'); ?>
<?php $__env->startSection('content'); ?>

	<?php if(count($aduanuser) > 0): ?>
	<div class="col-12">
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Table daftar aduan</h4>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
					<table class="table table-hover">
						<tbody>
							<tr>
						  		<th>No</th>
						  		<th>Judul</th>
						  		<th>Tanggal Aduan</th>
						  		<th>Status</th>
						  		<th>Aksi</th>
							</tr>
							<?php $__currentLoopData = $aduanuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $au): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
						 		<td><?php echo e($loop->iteration); ?></td>
						  		<td><?php echo e($au->judul); ?></td>
						  		<td><i class="fa fa-calendar-o"></i> <?php echo e($au->tgl_aduan); ?></td>

								<?php if($au->status == 'selesai'): ?>
									<td><span class="badge badge-pill badge-success">Selesai</span></td>
								<?php elseif($au->status == 'proses'): ?>
									<td><span class="badge badge-pill badge-info">Diproses</span></td>
                                    <?php elseif($au->status == 'ditolak'): ?>
									<td><span class="badge badge-pill badge-danger">Ditolak</span></td>
								<?php else: ?>
									<td><span class="badge badge-pill badge-warning">Belum Diproses</span></td>
								<?php endif; ?>
								<td><a class="btn btn-info" href="/masyarakat-show-aduan/<?php echo e($au->id); ?>"><i class="fa fa-id-card"></i> Detail</a></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	<p>Belum Ada aduan terdaftar, segera buat aduan anda pada form pengaduan</p>


<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/Masyarakat/dashboard.blade.php ENDPATH**/ ?>