<?php
	include('Components/Navigation.php');
?>
	<div class="banner-area banner-area-one">
		<div class="container-fluid p-0">
			<div class="row align-items-center flex-column-reverse flex-lg-row">
				<div class="col-lg-6">
					<div class="banner-single banner-single-one percent-padding">
						<div class="banner-single-content">
							<h2 class="banner-single-content-title fw-700"> Book and Enjoy Your Envents, Movies with Us! </h2>
							<p class="banner-single-content-para mt-3"> We are here to guide you and help you book the tickets for you </p>
							<div class="banner-location banner-location-one bg-white radius-5 mt-5">
								<div class="banner-location-flex">
									<div class="banner-location-single">
										<div class="banner-location-single-flex">
											<a class="submit-btn w-100 mt-4" type="submit"><i class="las la-calendar"></i> View Events </a>
										</div>
									</div>
									<div class="banner-location-single">
										<div class="banner-location-single-flex">
											<a class="submit-btn w-100 mt-4" type="submit"><i class="las la-film"></i> View Movies </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 bg-image banner-right-bg radius-20" style="background-image: url(<?php echo base_url('assets/img/banner/banner1.jpg');?>);"></div>
			</div>
		</div>
	</div>


	<section class="booking-area pat-100 pab-50">
		<div class="container">
			<div class="section-title center-text">
				<h2 class="title"> Why Book Tickets From Us? </h2>
				<div class="section-title-shapes"> </div>
			</div>
			<div class="row gy-4 mt-5">
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
					<div class="single-why center-text bg-white single-why-border radius-10">
						<div class="single-why-icon">
							<img src="<?php echo base_url('assets/img/icons/b1.svg');?>" alt="icon">
						</div>
						<div class="single-why-contents mt-3">
							<h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Hassle Free Booking </a> </h4>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow zoomIn" data-wow-delay=".4s">
					<div class="single-why center-text bg-white single-why-border radius-10">
						<div class="single-why-icon">
							<img src="<?php echo base_url('assets/img/icons/b2.svg');?>" alt="icon">
						</div>
						<div class="single-why-contents mt-3">
							<h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Easy to use </a> </h4>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-why center-text bg-white single-why-border radius-10">
						<div class="single-why-icon">
							<img src="<?php echo base_url('assets/img/icons/b3.svg');?>" alt="icon">
						</div>
						<div class="single-why-contents mt-3">
							<h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Free Cancellation </a> </h4>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-why center-text bg-white single-why-border radius-10">
						<div class="single-why-icon">
							<img src="<?php echo base_url('assets/img/icons/b4.svg');?>" alt="icon">
						</div>
						<div class="single-why-contents mt-3">
							<h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 24/7 Support </a> </h4>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="attraction-area pat-50 pab-50">
		<div class="container">
			<div class="section-title text-left append-flex">
				<h2 class="title"> On Going Events And Movies </h2>
				<div class="append-attraction"></div>
			</div>
			<div class="row mt-5">
				<div class="col-12">
					<div class="global-slick-init attraction-slider nav-style-one slider-inner-margin" data-appendarrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false" data-slidestoshow="4" data-swipetoslide="true" data-autoplay="true" data-autoplayspeed="2500" data-prevarrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextarrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
						<div class="attraction-item">
							<div class="single-attraction radius-20">
								<div class="single-attraction-thumb">
									<a href="hotel_details.html"> <img src="<?php echo base_url('assets/img/attraction/a1.jpg');?>" alt="img"> </a>
								</div>
								<div class="single-attraction-contents">
									<h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Eiffel Tower </a> </h4>
									<p class="single-attraction-contents-para"> We have over 28K reviews to assure you top notch service. </p>
								</div>
							</div>
						</div>
						<div class="attraction-item">
							<div class="single-attraction radius-20">
								<div class="single-attraction-thumb">
									<a href="hotel_details.html"> <img src="<?php echo base_url('assets/img/attraction/a2.jpg');?>" alt="img"> </a>
								</div>
								<div class="single-attraction-contents">
									<h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Disneyland </a> </h4>
									<p class="single-attraction-contents-para"> We have over 28K reviews to assure you top notch service. </p>
								</div>
							</div>
						</div>
						<div class="attraction-item">
							<div class="single-attraction radius-20">
								<div class="single-attraction-thumb">
									<a href="hotel_details.html"> <img src="<?php echo base_url('assets/img/attraction/a3.jpg');?>" alt="img"> </a>
								</div>
								<div class="single-attraction-contents">
									<h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Palace de justice </a> </h4>
									<p class="single-attraction-contents-para"> We have over 28K reviews to assure you top notch service. </p>
								</div>
							</div>
						</div>
						<div class="attraction-item">
							<div class="single-attraction radius-20">
								<div class="single-attraction-thumb">
									<a href="hotel_details.html"> <img src="<?php echo base_url('assets/img/attraction/a4.jpg');?>" alt="img"> </a>
								</div>
								<div class="single-attraction-contents">
									<h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Arc de Trimorph </a> </h4>
									<p class="single-attraction-contents-para"> We have over 28K reviews to assure you top notch service. </p>
								</div>
							</div>
						</div>
						<div class="attraction-item">
							<div class="single-attraction radius-20">
								<div class="single-attraction-thumb">
									<a href="hotel_details.html"> <img src="<?php echo base_url('assets/img/attraction/a2.jpg');?>" alt="img"> </a>
								</div>
								<div class="single-attraction-contents">
									<h4 class="single-attraction-contents-title"> <a href="hotel_details.html"> Disneyland </a> </h4>
									<p class="single-attraction-contents-para"> We have over 28K reviews to assure you top notch service. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include('Components/Footer.php'); ?>
