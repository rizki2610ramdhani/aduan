<?php $__env->startSection('title', 'Profile Petugas'); ?>
<?php $__env->startSection('judul', 'Profile Petugas'); ?>
<?php $__env->startSection('content'); ?>
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Profile</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><?php echo e(Auth::user()->nik); ?></td>
                        <td rowspan="5">
                            <img src="<?php echo e(asset('imagesProfile/' . Auth::user()->foto)); ?>" class="img-fluid" alt="Tycoon Admin" width="30%">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td><?php echo e(Auth::user()->nama); ?></td>
                    </tr>
                    <tr>
                        <td>Username</td><td>:</td>
                        <td><?php echo e(Auth::user()->username); ?></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td><td>:</td>
                        <td><?php echo e(Auth::user()->telp); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/petugas/profile.blade.php ENDPATH**/ ?>