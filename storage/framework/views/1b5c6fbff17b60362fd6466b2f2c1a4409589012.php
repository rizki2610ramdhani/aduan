<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('judul', 'Dashboard'); ?>
<?php $__env->startSection('subjudul', 'Daftar Aduan Saya'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Responsive Hover Table</h4>
				  <div class="box-controls pull-right">
					<div class="lookup lookup-circle lookup-right">
					  <input type="text" name="s">
					</div>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<div class="table-responsive">
					  <table class="table table-hover">
						<tbody><tr>
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
						  <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo e($au->tgl_aduan); ?></span> </td>
                          <?php if($au->proses == 'selesai'): ?>
						    <td><span class="badge badge-pill badge-success">Selesai</span></td>
                          <?php elseif($au->proses == 'proses'): ?>
                            <td><span class="badge badge-pill badge-warning">Proses</span></td>
                          <?php else: ?>
                            <td><span class="badge badge-pill badge-danger">Belum Diproses</span></td>
                          <?php endif; ?>
						  <td>CH</td>
						</tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </tbody></table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduan\resources\views/masyarakat/dashboard.blade.php ENDPATH**/ ?>