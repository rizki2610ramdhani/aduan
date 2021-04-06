
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/webkitx-admin-template/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Mar 2021 17:09:02 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/webkitx-admin-template/images/favicon.ico">

    <title>@yield('title')</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('user/main/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('user/main/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('user/main/css/skin_color.css')}}">	
@toastr_css
</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('user/images/auth-bg/bg-1.jpg')}})">
@yield('content')

<!-- Vendor JS -->

@jquery
@toastr_js
@toastr_render
	<script src="{{asset('user/main/js/vendors.min.js')}}"></script>
	<script src="{{asset('user/main/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('user/assets/icons/feather-icons/feather.min.js')}}"></script>	

</body>

<!-- Mirrored from www.multipurposethemes.com/admin/webkitx-admin-template/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Mar 2021 17:09:02 GMT -->
</html>