<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/webkitx-admin-template/main/sample_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Mar 2021 17:06:50 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/webkitx-admin-template/images/favicon.ico">

    <title><?php echo $__env->yieldContent('title'); ?></title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo e(asset('user/main/css/vendors_css.css')); ?>">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo e(asset('user/main/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('user/main/css/skin_color.css')); ?>">
	<?php echo toastr_css(); ?>
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-between">
		<a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block mx-10 push-btn" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-10">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li>
				<h4>Aplikasi Pengaduan Masyarakat</h4>
			</li>
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">

      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
	    <div class="user-profile px-10 py-15">
			<div class="d-flex align-items-center">
				<div class="image">
				  <img src="<?php echo e(asset('imagesProfile/' . Auth::user()->foto)); ?>" class="avatar avatar-lg bg-primary-light" alt="User Image">
				</div>
				<div class="info ml-10">
					<p class="mb-0">Welcome</p>
					<h5 class="mb-0"><?php echo e(Auth::user()->nama); ?></h5>
				</div>
			</div>
        </div>
	  <div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
			    <ul class="sidebar-menu" data-widget="tree">
				    <li>
				        <a href="<?php echo e(url('/masyarakat-dashboard')); ?>">
					        <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					        <span>Dashboard</span>
				        </a>
				    </li>
                    <li>
                        <a href="<?php echo e(url('/masyarakat-aduan')); ?>">
                            <i class="icon-Write"><span class="path1"></span><span class="path2"></span></i>
                            <span>Form Pengaduan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/masyarakat-profile')); ?>">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            <span>Profile</span>
                        </a>
                    </li>
					<hr>
					<li>
                        <a href="<?php echo e(url('/logout')); ?>" class="btn btn-danger" style="color:white;">
                            Logout
                        </a>
                    </li>
			    </ul>
		  </div>
	  </div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title"><?php echo $__env->yieldContent('judul'); ?></h3>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title"><?php echo $__env->yieldContent('subjudul'); ?></h4>
						</div>
						<div class="box-body">
						  <?php echo $__env->yieldContent('content'); ?>
						</div>
						<!-- /.box-footer-->
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->

	  </div>
  </div>
  <!-- /.content-wrapper -->



  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	<!-- Page Content overlay -->
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="display:none; cursor:pointer" id="myOverlay"></div>
	<!-- ./side demo panel -->

	<!-- Vendor JS -->
	<?php echo jquery(); ?>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
	<script src="<?php echo e(asset('user/main/js/vendors.min.js')); ?>"></script>
	<script src="<?php echo e(asset('user/main/js/pages/chat-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('user/assets/icons/feather-icons/feather.min.js')); ?>"></script>

	<!-- WebkitX Admin App -->
	<script src="<?php echo e(asset('user/main/js/template.js')); ?>"></script>



</body>

<!-- Mirrored from www.multipurposethemes.com/admin/webkitx-admin-template/main/sample_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Mar 2021 17:06:50 GMT -->
</html>
<?php /**PATH C:\xampp\htdocs\aduan\resources\views/templates/masyarakat.blade.php ENDPATH**/ ?>