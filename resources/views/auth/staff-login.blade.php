<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

	<link rel="stylesheet" href="{{ asset('css/blue.css') }}">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html">{{ config('app.name', 'Laravel') }}</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your Staff session</p>

			<form class="form" method="POST" action="{{ route('staff.login') }}">
				@csrf
				<div class="form-group {{ $errors->has('username') ? 'has-error' : ''  }}">
					<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
					@if ( $errors->has('username') )
					<span class="help-block">{{ $errors->first('username') }}</span>
					@endif
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox"> Remember Me
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

            <a href="#">I forgot my password</a><br><br>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('staff.login') }}" class="btn btn-primary btn-block btn-flat">Sign In as Staff</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('doctor.login') }}" class="btn btn-primary btn-block btn-flat">Sign In as Midwife</a>
                </div>
            </div>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 3 -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- iCheck -->
	<script src="{{ asset('js/icheck.min.js') }}"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>
</html>
