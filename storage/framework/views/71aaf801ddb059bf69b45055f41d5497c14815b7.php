
<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/tycoon/design-dark-gradient-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 11:30:44 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">

		<!-- Title -->
		<title><?php echo $__env->yieldContent('title'); ?></title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="<?php echo e(asset('admin/fonts/style.css')); ?>">
		<!-- Main css -->
		<link rel="stylesheet" href="<?php echo e(asset('admin/css/main.css')); ?>">
		<!-- Chat css -->
		<link rel="stylesheet" href="<?php echo e(asset('admin/css/chat.css')); ?>">

		<!-- *************
			************ Vendor Css Files *************
		************ -->

	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">

				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="/admin-dashboard" class="logo"><?php echo e(Auth::user()->level); ?></a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- User profile start -->
				<div class="sidebar-user-details">
					<div class="user-profile">
						<img src="<?php echo e(asset('imagesProfile/' . Auth::user()->foto)); ?>" class="profile-thumb" alt="User Thumb">
						<span class="status-label"></span>
					</div>
					<h6 class="profile-name"><?php echo e(Auth::user()->nama); ?></h6>
				</div>
				<!-- User profile end -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="/admin-dashboard">
									<i class="icon-home2"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>
                            <li class="sidebar-dropdown">
								<a>
									<i class="icon-monitor"></i>
									<span class="menu-text">Daftar Pengguna</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="/admin-dft-admin"><i class="icon-inbox"></i> Admin</a>
										</li>
										<li>
											<a href="/admin-dft-petugas"><i class="icon-record_voice_over"></i> Petugas</a>
										</li>
										<li>
											<a href="/admin-dft-masyarakat"><i class="icon-wc"></i> Masyarakat</a>
										</li>
									</ul>
								</div>
							</li>
                            <li>
								<a href="/admin-dft-pengaduan">
									<i class="icon-edit1"></i>
									<span class="menu-text">Daftar Pengaduan</span>
								</a>
							</li>
                            <li>
								<a href="/admin-profile">
									<i class="icon-user"></i>
									<span class="menu-text">Profile</span>
								</a>
							</li>
                            <hr>
                            <li>
                                <div class="container">
								<a href="/logout" class="btn btn-danger">
									<span class="menu-text">Logout</span>
								</a>
                                </div>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->

			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-menu"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-menu"></i>
						</a>
					</div>
				</header>
				<!-- Header end -->

				<!-- Main container start -->
				<div class="main-container">

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><?php echo $__env->yieldContent('judul'); ?></li>
						</ol>
						<!-- Breadcrumb end -->

					</div>
					<!-- Page header end -->
                    <?php echo $__env->yieldContent('content'); ?>

				</div>
				<!-- Main container end -->
			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/moment.js')); ?>"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="<?php echo e(asset('admin/vendor/slimscroll/slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/slimscroll/custom-scrollbar.js')); ?>"></script>

<!-- Polyfill JS -->
<script src="<?php echo e(asset('admin/vendor/polyfill/polyfill.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/polyfill/class-list.min.js')); ?>"></script>

<!-- Apex Charts -->
<script src="<?php echo e(asset('admin/vendor/apex/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/apex/custom/home/lineRevenueGradientGraph.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/apex/custom/home/radialTasks.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/apex/custom/home/lineNewCustomersGradientGraph.js')); ?>"></script>

<!-- Peity Charts -->
<script src="<?php echo e(asset('admin/vendor/peity/peity.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/peity/custom-peity.js')); ?>"></script>

<!-- Circleful Charts -->
<script src="<?php echo e(asset('admin/vendor/circliful/circliful.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/vendor/circliful/circliful.custom.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>

</body>

<!-- Mirrored from bootstrap.gallery/tycoon/design-dark-gradient-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 11:33:31 GMT -->
</html>

<?php /**PATH C:\xampp\htdocs\aduan\resources\views/templates/admin.blade.php ENDPATH**/ ?>