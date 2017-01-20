
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href={{ url("administration/css/bootstrap.min.css") }} rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href={{ url("administration/css/style.css") }} rel='stylesheet' type='text/css' />
<link href={{ url("administration/css/font-awesome.css") }} rel="stylesheet">
<script src={{ url("administration/js/jquery.min.js") }}> </script>
<script src={{ url("administration/js/bootstrap.min.js") }}> </script>
</head>
<body>
	<div class="login">
		<h1><a href="{{ url('/') }}">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form method="post" action="{{ url('admin/login') }}">
			<div class="col-md-12">
				@if ($errors->all())
					<div class="error_message alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						@foreach ($errors->all() as $key => $error)
							<li>{!!  $error !!}</li>
						@endforeach
					</div>
				@endif
				{{ csrf_field() }}
				<div class="login-mail">
					<input type="text" placeholder="Email" required name="email">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required name="password">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-do">
					<label class="hvr-shutter-in-horizontal login-sub">
						<input type="submit" value="login">
					</label>
				</div>
			</div>
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src={{ url("administration/js/jquery.nicescroll.js") }}></script>
	<script src={{ url("administration/js/scripts.js") }}></script>
	<!--//scrolling js-->
</body>
</html>

