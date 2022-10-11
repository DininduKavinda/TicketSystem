<?php
if ($this->session->userdata('logged_in')){

	include ('Components/Navigation.php');
	include('Components/Sidebar.php'); ?>
<div class="dashboard-right-contents mt-4 mt-lg-0">
	<div class="dashboard-reservation">
		<div class="single-reservation bg-white base-padding">
			<div class="single-reservation-flex mb-4">
				<div class="single-reservation-author">
					<div class="single-reservation-author-flex">
						<div class="single-reservation-author-thumb">
							<img src="assets/img/dashboard/author.jpg" alt="img">
						</div>
						<div class="single-reservation-author-contents">
							<h5 class="single-reservation-author-contents-title"> <?php echo $this->session->userdata('first_name');?> <b><?php echo $this->session->userdata('last_name');?></b> </h5>
							<p class="single-reservation-author-contents-para"> Member since <?php echo $this->session->userdata('login_date');?> </p>
						</div>
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="dashboard_edit_profile.html" class="cmn-btn btn-border"> Edit Profile </a>
				</div>
			</div>
			<div class="single-reservation-item">
				<div class="single-reservation-contact">
					<div class="single-reservation-contact-item">
						<span class="single-reservation-contact-list"> <span> <i class="las la-map-marker-alt"></i> </span><?php echo $this->session->userdata('login_address');?> </span>
					</div>
					<div class="single-reservation-contact-item">
						<a href="#" class="single-reservation-contact-list"> <span> <i class="las la-envelope"></i> </span> <span class="__cf_email__"><?php echo $this->session->userdata('login_email');?></span> </a>
					</div>
					<div class="single-reservation-contact-item">
						<a href="tel:(208)5550112" class="single-reservation-contact-list"> <span> <i class="las la-phone-alt"></i> </span> <?php echo $this->session->userdata('phone');?> </a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-reservation bg-white base-padding">
			<div class="single-reservation-flex">
				<div class="single-reservation-author">
					<div class="single-reservation-author-flex">
						<div class="single-reservation-author-contents">
							<h5 class="single-reservation-author-contents-title"> Password </h5>
							<p class="single-reservation-author-contents-para"> Last change 4 month ago </p>
						</div>
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="dashboard_pass_change.html" class="cmn-btn btn-border"> Change Password </a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php
	include ('Components/Footer2.php');
}
else{
	redirect('IndexController/login');
}?>
	 ?>
