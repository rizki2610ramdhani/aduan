<?php $__env->startSection('title', 'User Profile'); ?>
<?php $__env->startSection('judul', 'Profile'); ?>

    <?php $__env->startSection('subjudul', 'Profile Pengguna'); ?>

    <?php $__env->startSection('content'); ?>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box box-body b-1 text-center no-shadow">
                    <img src="<?php echo e(asset('imagesProfile/' . Auth::user()->foto)); ?>" id="product-image " class="img-fluid" alt="">
                </div>
                <div class="pro-photos">

                </div>
                <div class="clear">

                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <br><br>
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
                        <tr>
                            <td colspan="2" ><a href="/masyarakat-edit-profile" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aduannn\resources\views/masyarakat/profile.blade.php ENDPATH**/ ?>