@extends('backend.master.master')
@section('title','Quản trị')
			@section('content')
			<div class="page-content">
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->
				
						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-box"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Tasks (05)
									</div>	
									<ul class="header-tasks">
										<li>
											<p>#48 - Dashboard UI<span>90%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
													<span class="sr-only">90% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#95 - Alignment Fix<span>60%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													<span class="sr-only">60% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#7 - Broken Button<span>40%</span></p>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Zyan Ferris</span>
									<span class="avatar">ZF<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user.png" alt="Admin Template">
											</div>
											<h5>Zyan Ferris</h5>
											<p>Admin</p>
										</div>
										<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
										<a href="admin/logout"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->
				
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Dashboards</li>
						<li class="breadcrumb-item active">Admin Dashboard</li>
					</ol>
				
					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>    
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
								<i class="icon-print"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
								<i class="icon-cloud_download"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->
				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon">
									<i class="icon-account_circle"></i>
								</div>
								<div class="stats-detail">
									<h3>82k</h3>
									<p>Khách lẻ</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon">
									<i class="icon-watch_later"></i>
								</div>
								<div class="stats-detail">
									<h3>2k</h3>
									<p>Đại lý</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon">
									<i class="icon-visibility"></i>
								</div>
								<div class="stats-detail">
									<h3>70k</h3>
									<p>Khách đến cửa hàng</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon">
									<i class="icon-shopping_basket"></i>
								</div>
								<div class="stats-detail">
									<h3>9.000k</h3>
									<p>Doanh thu</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon secondary">
									<i class="icon-check_circle"></i>
								</div>
								<div class="stats-detail">
									<h3>3k</h3>
									<p>Đơn hàng</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-tiles">
								<div class="info-icon secondary">
									<i class="icon-archive"></i>
								</div>
								<div class="stats-detail">
									<h3>2,5k</h3>
									<p>Orders</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->

					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-280">
								<div class="card-header">
									<div class="card-title">Orders</div>
								</div>
								<div class="card-body">
									<div class="chartist bar-scheme-one">
										<div class="barChartOrders"></div>
									</div>
									<div class="row gutters justify-content-center">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="info-stats m-0">
												<span class="info-label"></span>
												<p class="info-title">Online Orders</p>
												<h3 class="info-total">950k</h3>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="info-stats m-0">
												<span class="info-label secondary"></span>
												<p class="info-title">Direct Orders</p>
												<h3 class="info-total">300k</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-280 agenda-bg">
								<div class="card-body">
									<div class="agenda">
										<div class="todays-date">
											<h5>Công việc - <span class="date" id="todays-date"></span></h5>
										</div>
										<ul class="agenda-list">
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Gọi cho khách A</p>
													<small>09:00</small>
												</div>
											</li>
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Book chương trình teambulding</p>
													<small>09:30</small>
												</div>
											</li>
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Book vé công tác cho anh B (TPKD)</p>
													<small>10:00</small>
												</div>
											</li>
											<li>
												<span class="bullet secondary">&nbsp;</span>
												<div class="details">
													<p>Liên hệ nhà cung cấp C</p>
													<small>09:00</small>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-420">
								<div class="card-header">
									<div class="card-title">SỐ LƯỢNG KHÁCH HÀNG</div>
								</div>
								<div class="card-body">
									<div class="row justify-content-center">
										<div class="col-xl-10">
											<div id="world-map-markers2" class="chart-height-md1"></div>
										</div>
									</div>
									<div class="row gutters justify-content-center">
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label"></span>
												<p class="info-title">Khách hàng đến shop</p>
												<h3 class="info-total">9000</h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label"></span>
												<p class="info-title">Khách hàng order</p>
												<h3 class="info-total">8000</h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label secondary"></span>
												<p class="info-title">Số lượng đơn hoàn</p>
												<h3 class="info-total">75</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-420">
								<div class="card-header">
									<div class="card-title">Báo cáo doanh thu</div>
								</div>
								<div class="card-body">
									<div class="chartist threshold-scheme">
										<div class="thresholdChart"></div>
									</div>
									<!-- Row starts -->
									<div class="row gutters">
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="overall-earnings">
												<div class="earnings-icon">
													<i class="icon-local_airport"></i>
												</div>
												<div class="earnings-stats">
													<p>Online</p>
													<h3>$75,000</h3>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="overall-earnings">
												<div class="earnings-icon dark">
													<i class="icon-star"></i>
												</div>
												<div class="earnings-stats">
													<p>Bán buôn</p>
													<h3>$95,000</h3>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="overall-earnings">
												<div class="earnings-icon secondary">
													<i class="icon-local_taxi"></i>
												</div>
												<div class="earnings-stats">
													<p>Bán lẻ</p>
													<h3>$32,000</h3>
												</div>
											</div>
										</div>
									</div>
									<!-- Row ends -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Tin nhắn</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="user-messages">
											<li class="clearfix">
												<div class="customer">AM</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Ordered</span>
													<h5>Nguyễn Minh Đức</h5>
													<p>11h trưa 11.7 cả phòng kế toán sang phòng họp để họp phòng nhé <b>WAFI510</b> Đức Nguyễn.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">AS</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Delivered</span>
													<h5>Nguyễn Ngọc Tâm</h5>
													<p>Lịch nhận hàng từ nhà cung cấp C 14h20 ngày 11.7</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">ZR</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Cancelled</span>
													<h5>Nguyễn Văn Nam</h5>
													<p>Đi gặp khách hàng từ 8h-12h ngày 6.7.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer secondary">LJ</div>
												<div class="delivery-details">
													<span class="badge badge-secondary">Returned</span>
													<h5>Đinh Ngọc Lan</h5>
													<p>................................</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Top 5 đại lý</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="top-agents-container">
											<div class="top-agent">
												<img src="img/user.png" class="avatar" alt="Agent" />
												<div class="agent-details">
													<h6>Đại lý A</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #1</div>
															<div class="right">9,800 $</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img/user22.png" class="avatar" alt="Agent" />
												<div class="agent-details">
													<h6>Đại lý B</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #2</div>
															<div class="right">7,500 $</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img/user6.png" class="avatar" alt="Agent" />
												<div class="agent-details">
													<h6>Đại lý C</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #3</div>
															<div class="right">4,200 $</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img/user20.png" class="avatar" alt="Agent" />
												<div class="agent-details">
													<h6>Đại lý D</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-secondary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #4</div>
															<div class="right">3,800 $</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img/user13.png" class="avatar" alt="Agent" />
												<div class="agent-details">
													<h6>Đại lý E</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #5</div>
															<div class="right">1,200 $</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Khách hàng đánh giá dịch vụ</div>
								</div>
								<div class="card-body">
									<div class="user-ratings">
										<div class="total-ratings">
											<h2>4.5</h2>
											<div class="rating-stars">
												<div id="rate1"></div>
											</div>
										</div>
										<div class="ratings-list-container">
											<div class="ratings-list">
												<div class="rating-level">5.0</div>
												<div class="rating-stars">
													<div class="rateA"></div>
												</div>
												<div class="total">
													8,500 <span class="percentage">65%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">4.0</div>
												<div class="rating-stars">
													<div class="rateB"></div>
												</div>
												<div class="total">
													3,500 <span class="percentage">20%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">3.0</div>
												<div class="rating-stars">
													<div class="rateC"></div>
												</div>
												<div class="total">
													1,400 <span class="percentage">15%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">2.0</div>
												<div class="rating-stars">
													<div class="rateD"></div>
												</div>
												<div class="total">
													300 <span class="percentage">05%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">1.0</div>
												<div class="rating-stars">
													<div class="rateE"></div>
												</div>
												<div class="total">
													75 <span class="percentage">03%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->

				</div>
				<!-- Main container end -->
			</div>
			@endsection	
				

