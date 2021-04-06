<?php $__env->startSection('title', 'Detail Aduan'); ?>
<?php $__env->startSection('judul', 'Detail Aduan'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <?php if($dt->status == 'selesai'): ?>
            <div class="info-icon success">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Selesai</h3>
                <p>Proses</p>
            </div>
			<?php elseif($dt->status == 'proses'): ?>
            <div class="info-icon info">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Diproses</h3>
                <p>Proses</p>
            </div>
            <?php elseif($dt->status == 'ditolak'): ?>
            <div class="info-icon danger">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Ditolak</h3>
                <p>Proses</p>
            </div>
			<?php else: ?>
            <div class="info-icon warning">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Belum Diproses</h3>
                <p>Proses</p>
            </div>
			<?php endif; ?>
        </div>
    </div>
</div>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Aduan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><?php echo e($dt->masyarakat->nik); ?></td>
                        <td rowspan="6">
                            <img src="<?php echo e(asset('imagesDB/' . $dt->foto)); ?>" class="img-fluid" alt="Tycoon Admin">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td><?php echo e($dt->masyarakat->nama); ?></td>
                    </tr>
                    <tr>
                        <td>Judul</td><td>:</td>
                        <td><?php echo e($dt->judul); ?></td>
                    </tr>
                    <tr>
                        <td>Aduan</td><td>:</td>
                        <td><?php echo e($dt->aduan); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td><td>:</td>
                        <td><?php echo e($dt->tgl_aduan); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php if($dt->status == '0'): ?>

<?php elseif($dt->status == 'ditolak'): ?>

<?php elseif($dt->status == 'proses'): ?>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tanggapan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td rowspan="6">

                        </td>
                        <td>NIK Petugas</td>
                        <td>:</td>
                        <td><?php echo e($tg->petugas->nik); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td> <td>:</td>
                        <td><?php echo e($tg->petugas->nama); ?></td>
                    </tr>
                    <tr>
                        <td>Username Petugas</td>
                        <td>:</td>
                        <td><?php echo e($tg->petugas->username); ?></td>
                    </tr>
                    <tr>
                        <td>No Telepon Petugas</td> <td>:</td>
                        <td><?php echo e($tg->petugas->telp); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Tanggapan</td><td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Tanggapan</td><td>:</td>
                        <td>-</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tanggapan</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td rowspan="4">
                            <img src="<?php echo e(asset('imagesDB/' . $tg->foto)); ?>" class="img-fluid" alt="Tycoon Admin">
                        </td>
                        <td>NIK Petugas</td>
                        <td>:</td>
                        <td><?php echo e($tg->petugas->nik); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td> <td>:</td>
                        <td><?php echo e($tg->petugas->nama); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Tanggapan</td><td>:</td>
                        <td><?php echo e($tg->tgl_tanggapan); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggapan</td><td>:</td>
                        <td><?php echo e($tg->tanggapan); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/admin/proses.blade.php ENDPATH**/ ?>