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
		<title>@yield('title')</title>
        

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="public/backend/css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="public/backend/fonts/style.css">
		
		<!-- Main css -->
		<link rel="stylesheet" href="public/backend/css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="public/backend/vendor/daterange/daterange.css" />

		<!-- Chartist css -->
		<link rel="stylesheet" href="public/backend/vendor/chartist/public/backend/css/chartist.min.css" />
		<link rel="stylesheet" href="public/backend/vendor/chartist/public/backend/css/chartist-custom.css" />

	</head>

	<body>
        @include('backend.master.sidebar')        
        @yield('content')
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="public/backend/js/jquery.min.js"></script>
		<script src="public/backend/js/bootstrap.bundle.min.js"></script>
		<script src="public/backend/js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="public/backend/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="public/backend/vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="public/backend/vendor/daterange/daterange.js"></script>
		<script src="public/backend/vendor/daterange/custom-daterange.js"></script>

		<!-- Chartist JS -->
		<script src="public/backend/vendor/chartist/js/chartist.min.js"></script>
		<script src="public/backend/vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="public/backend/vendor/chartist/js/custom/threshold/threshold.js"></script>
		<script src="public/backend/vendor/chartist/js/custom/bar/bar-chart-orders.js"></script>

		<!-- jVector Maps -->
		<script src="public/backend/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="public/backend/vendor/jvectormap/world-mill-en.js"></script>
		<script src="public/backend/vendor/jvectormap/gdp-data.js"></script>
		<script src="public/backend/vendor/jvectormap/custom/world-map-markers2.js"></script>

		<!-- Rating JS -->
		<script src="public/backend/vendor/rating/raty.js"></script>	
		<script src="public/backend/vendor/rating/raty-custom.js"></script>


		<!-- Main JS -->
		<script src="public/backend/js/main.js"></script>

	</body>
</html>