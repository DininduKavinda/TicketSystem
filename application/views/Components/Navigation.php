<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Hotel Booking - Html Template </title>

	<?php include('Plugins.php') ?>
</head>

<body>
	<header class="header-style-01">

		<nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
			<div class="container custom-container-one nav-container">
				<div class="logo-wrapper">
					<a href="index.html" class="logo">
						<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="">

					</a>
				</div>
				<div class="responsive-mobile-menu d-lg-none">
					<a href="javascript:void(0)" class="click-nav-right-icon">
						<i class="las la-ellipsis-v"></i>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotel_booking_menu">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="hotel_booking_menu">
					<ul class="navbar-nav">
						<li>
							<a>Home</a>
						</li>
						<li><a href="about.html"> About </a></li>
						<li><a href="checkout.html"> Checkout </a></li>
						<li class="menu-item-has-children current-menu-item">
							<a href="javascript:void(0)">Pages</a>
							<ul class="sub-menu">
								<li><a href="listing.html">Listing</a></li>
								<li><a href="hotel_details.html"> Hotel Details </a></li>
								<li><a href="confirmation.html"> Confirmation </a></li>
								<li><a href="dashboard.html"> Dashboard </a></li>
								<li><a href="dashboard_cancellation.html"> Cancellations </a></li>
								<li><a href="dashboard_report_issue.html"> Report Issue </a></li>
								<li><a href="dashboard_support.html"> Support </a></li>
								<li><a href="dashboard_tickets.html"> Tickets </a></li>
								<li><a href="dashboard_add_tickets.html"> Add Ticket </a></li>
								<li><a href="dashboard_profile.html"> Dashboard Profile </a></li>
								<li><a href="dashboard_edit_profile.html"> Edit Profile </a></li>
								<li><a href="dashboard_pass_change.html"> Password Change </a></li>
								<li><a href="error.html"> Error Page </a></li>
							</ul>
						</li>
						<li class="menu-item-has-children current-menu-item">
							<a href="javascript:void(0)">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog_details.html"> Blog Details </a></li>
							</ul>
						</li>
						<li><a href="contact.html"> Contact Us </a></li>
					</ul>
				</div>
				<?php
				$logged_in = $this->session->userdata('logged_in');
				if ($logged_in=true) {
				?>
				<div class="navbar-right-content show-nav-content">
						<div class="single-right-content">
							<div class="navbar-author">
								<div class="navbar-author-flex">
									<div class="navbar-author-thumb">s
										<img src="assets/img/single-page/author.jpg" alt="img">
									</div>
									<div class="navbar-author-name">
										<h6 class="navbar-author-name-title"><?php echo $this->session->userdata('first_name'); ?></h6>
									</div>
								</div>
								<div class="navbar-author-wrapper">
									<div class="navbar-author-wrapper-list">
										<a href="<?php echo base_url('index.php/AdminController/logout'); ?>" class="navbar-author-wrapper-list-item"> Log Out </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				<?php
				} else {
				?>
					<div class="navbar-right-content show-nav-content">
						<div class="single-right-content">
							<div class="navbar-right-flex">
								<div class="navbar-right-btn">
									<a href="<?php echo base_url('index.php/IndexController/Login'); ?>"> Log In </a>
								</div>
								<div class="btn-wrapper">
									<a href="<?php echo base_url('index.php/IndexController/Register'); ?>" class="cmn-btn btn-bg-1 radius-10"> Sign Up </a>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</nav>

	</header>
