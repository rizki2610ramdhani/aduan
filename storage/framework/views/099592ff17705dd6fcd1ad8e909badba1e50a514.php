<?php $__env->startSection('title', 'Detail Aduan'); ?>
<?php $__env->startSection('judul', 'Detail Aduan'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tgp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row gutters">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <?php if($tgp->pengaduan->status == 'selesai'): ?>
            <div class="info-icon success">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Selesai</h3>
                <p>Proses</p>
            </div>
			<?php elseif($tgp->pengaduan->status == 'proses'): ?>
            <div class="info-icon info">
                <i class="icon-inbox"></i>
            </div>
            <div class="sale-num">
                <h3>Diproses</h3>
                <p>Proses</p>
            </div>
            <?php elseif($tgp->pengaduan->status == 'ditolak'): ?>
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
    <?php if($tgp->pengaduan->status == 'proses'): ?>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="info-stats2">
            <div class="info-icon danger">
                <i class="icon-x-circle"></i>
            </div>
            <div class="sale-num">
                <a href="/petugas-validate/<?php echo e($tgp->pengaduan_id); ?>">
                <h3>Tidak lulusn</h3>
                <p>penilaian kriteria aduan</p>
            </a>
            </div>
        </div>
    </div>
    <?php else: ?>

    <?php endif; ?>
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
                        <td><?php echo e($tgp->pengaduan->masyarakat->nik); ?></td>
                        <td rowspan="6">
                            <img src="<?php echo e(asset('imagesDB/' . $tgp->pengaduan->foto)); ?>" class="img-fluid" alt="Tycoon Admin">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td><?php echo e($tgp->pengaduan->masyarakat->nama); ?></td>
                    </tr>
                    <tr>
                        <td>Judul</td><td>:</td>
                        <td><?php echo e($tgp->pengaduan->judul); ?></td>
                    </tr>
                    <tr>
                        <td>Aduan</td><td>:</td>
                        <td><?php echo e($tgp->pengaduan->aduan); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td><td>:</td>
                        <td><?php echo e($tgp->pengaduan->tgl_aduan); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/petugas/detail.blade.php ENDPATH**/ ?>