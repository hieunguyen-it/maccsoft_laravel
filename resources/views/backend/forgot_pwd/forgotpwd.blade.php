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
		<title>Wafi Admin Template - Forgot Password</title>
		
		<!-- *************
			************ Common Css Files *************
		************ -->
			
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="public/backend/css/bootstrap.min.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="public/backend/css/main.css" />


	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="POST">
				@csrf
				<div class="row justify-content-md-center">
					<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="login" class="login-logo">
									<img src="img/logo-dark.png" alt="Wafi Admin Dashboard" />
								</a>
								<h5>Vui lòng nhập id email bạn đã cung cấp trong quá trình đăng ký.</h5>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter Email Address" />
								</div>
								<div class="actions">
									<button type="submit" class="btn btn-primary">Submit</button>
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