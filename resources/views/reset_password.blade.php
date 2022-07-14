<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>Living Legacy</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('owner/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('owner/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('owner/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('owner/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('owner/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('owner/css/theme.css')}}" />


		<!--(remove-empty-lines-end)-->



		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('owner/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('owner/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('owner/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<div style="margin-bottom: 80px; text-align: center;">
					<a href="{{route('login_default')}}" class="logo float-left mb-3">
						<img width="100%" src="{{asset('owner/img/logo.png')}}" alt="Logo" />
					</a>
				</div>

				<div class="panel card-sign">
					
					<div class="card-body">
						<h2 class="text-center mb-3">Reset Password</h2>
						@if (Session::has('error'))
				          <br>
				         <div class="alert alert-danger alert-dismissible fade show" role="alert">
						  {{Session::get('error')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
				         @endif
				         @if (Session::has('message'))
				          <br>
				         <div class="alert alert-success alert-dismissible fade show" role="alert">
						  {{Session::get('message')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
				         @endif
						<div class="alert alert-info">
							<p class="m-0">Enter your new password!</p>
						</div>

						<form action="{{route('reset_password_check')}}" method="post">
							@csrf
							<input type="hidden" name="reset_token" value="{{$reset_token}}">
							<div class="form-group mb-3">
								<div class="input-group">
									 <input name="password" type="password" class="form-control" required="1" placeholder="New Password">
									
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									 <input name="confirm_password" type="password" class="form-control" required="1" placeholder="Confirm Password">
									
								</div>
							</div>

							<div class="form-group mb-3 text-center">
								<div class="input-group">
									<button type="submit" name="reset" class="btn btn-primary mx-auto">Reset</button>
									
								</div>
							</div>

							<p class="text-center mt-3">Remembered? <a href="login">Sign In!</a></p>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright {{date("Y")}}. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<!-- Vendor -->
		<script src="{{asset('owner/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('owner/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('owner/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('owner/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('owner/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('owner/vendor/common/common.js')}}"></script>
		<script src="{{asset('owner/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('owner/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('owner/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('owner/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('owner/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('owner/js/theme.init.js')}}"></script>

	</body>
</html>