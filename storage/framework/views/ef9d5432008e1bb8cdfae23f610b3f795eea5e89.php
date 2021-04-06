<?php $__env->startSection('title', 'Detail Aduan'); ?>
<?php $__env->startSection('judul', 'Detail Aduan'); ?>

<?php $__currentLoopData = $aduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->startSection('subjudul'); ?>
        <h5><a href="/masyarakat-dashboard">Dashboard</a> / Detail Aduan</h5>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box box-body b-1 text-center no-shadow">
                    <img src="<?php echo e(asset('imagesDB/' . $ad->foto)); ?>" id="product-image " class="img-fluid" alt="">
                </div>
                <div class="pro-photos">

                </div>
                <div class="clear">

                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <h2 class="box-title mt-0"><?php echo e($ad->judul); ?></h2>
                <div class="input-group">
                    <ul class="icolors">
                        <?php if($ad->status == 'selesai'): ?>
                            <p class="badge badge-pill badge-success">Selesai</p>
						<?php elseif($ad->status == 'proses'): ?>
                            <p class="badge badge-pill badge-info">Diproses</p>
                            <?php elseif($ad->status == 'ditolak'): ?>
                            <p class="badge badge-pill badge-danger">Ditolak</p>
						<?php else: ?>
                            <p class="badge badge-pill badge-warning">Belum Diproses</p>
						<?php endif; ?>
                    </ul>
                </div>
                <hr>
                <p><?php echo e($ad->aduan); ?></p>
                <div class="row">
                </div>
                <hr>
                <h5 class="box-title mt-20"><i class="fa fa-calendar-o"></i> <?php echo e($ad->tgl_aduan); ?></h5>
                <?php if($ad->status == 'selesai'): ?>
                | <a href="/masyarakat-tanggapan/<?php echo e($ad->id); ?>" class="btn btn-info">Lihat Tanggapan</a>
				<?php else: ?>

				<?php endif; ?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="box-title mt-40">Detail Pelapoor</h4>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="390">NIK</td>
                                <td> <?php echo e(Auth::user()->nik); ?> </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> <?php echo e(Auth::user()->nama); ?> </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td> <?php echo e(Auth::user()->username); ?> </td>
                            </tr>
                            <tr>
                                <td>No. Telepon</td>
                                <td> <?php echo e(Auth::user()->telp); ?> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/masyarakat/show-aduan.blade.php ENDPATH**/ ?>