<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Wafi Admin Template - Login</title>
		
		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="public/backend/css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="public/backend/css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="POST">
				@csrf
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/logo-dark.png" alt="Wafi Admin Dashboard" />
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" />
									@if ($errors->has('email'))
									<div class="alert alert-danger" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									  </div>
									@endif
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password" />
									@if ($errors->has('password'))
									<div class="alert alert-danger" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									  </div>
									@endif
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
								<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.html">Forgot password?</a>
								</div>
								<hr>
								<div class="actions align-left">
									<span class="additional-link">New here?</span>
									<a href="register" class="btn btn-dark">Create an Account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>