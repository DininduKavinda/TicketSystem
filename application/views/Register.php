<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Hotel Booking - Html Template </title>

<?php include('Components/Plugins.php'); ?>

</head>

<body>

	<section class="l-area padding-top-100 padding-bottom-100">
		<div class="container">
			<div class="login-wrapper login-shadow bg-white">
				<div class="login-wrapper-flex">
					<div class="login-wrapper-thumb">
						<img src="<?php echo base_url('assets/img/single-page/login.jpg');?>" alt="img">
					</div>
					<div class="login-wrapper-contents login-padding">
						<h2 class="single-title"> Welcome! </h2>
						<?php echo validation_errors(); ?>
						<?php echo form_open('RegisterController/RegisterUser');?>
						<div class="login-wrapper-form custom-form padding-top-20" >
							<div class="input-flex-item">
								<div class="single-input mt-4">
									<label class="label-title mb-3"> First Name </label>
									<input class="form--control" type="text" name="first_name" id="first_name" placeholder="Type First Name" required>
								</div>
								<div class="single-input mt-4">
									<label class="label-title mb-3"> Last Name </label>
									<input class="form--control" type="text" name="last_name" id="last_name" placeholder="Type Last Name" required>
								</div>
							</div>
							<div class="single-input mt-4">
								<label class="label-title mb-3"> User Name </label>
								<input class="form--control" type="text" name="username" id="username" placeholder="Type User Name" required>
							</div>
							<div class="single-input mt-4">
								<label class="label-title mb-3"> Email Address </label>
								<input class="form--control" type="email" name="login_email" id="login_email" placeholder="Type Email" required>
							</div>
							<div class="single-input mt-4">
								<label class="label-title mb-3"> Phone Number </label>
								<input class="form--control" type="tel" id="phone" name="phone" required>
							</div>
							<div class="input-flex-item">
								<div class="single-input mt-4">
									<label class="label-title mb-3"> Create Password </label>
									<input class="form--control" type="password" name="login_password" id="login_password" placeholder="Type Password" required>
									<div class="icon toggle-password">
										<div class="show-icon"> <i class="las la-eye-slash"></i> </div>
										<span class="hide-icon"> <i class="las la-eye"></i> </span>
									</div>
								</div>
								<div class="single-input mt-4">
									<label class="label-title mb-3"> Confirm Password </label>
									<input class="form--control" type="password" name="login_confirm" id="login_confirm" placeholder="Confirm Password" required>
									<div class="icon toggle-password">
										<div class="show-icon"> <i class="las la-eye-slash"></i> </div>
										<span class="hide-icon"> <i class="las la-eye"></i> </span>
									</div>
								</div>
							</div>
							<div class="checkbox-inline mt-4">
								<input class="check-input" type="checkbox" id="check15" name="check15" required>
								<label class="checkbox-label" for="check15"> By creating an account, you agree to the <a class="color-one" href="javascript:void(0)"> terms of service </a> and <a class="color-one" href="javascript:void(0)"> Conditions </a>,
									and <a class="color-one" href="javascript:void(0)"> privacy policy </a> </label>
							</div>
							<button class="submit-btn w-100 mt-4" type="submit"> Sign Up Now </button>
							<span class="account color-light mt-3"> Already have an account? <a class="color-one" href="<?php echo base_url('index.php/IndexController/Login'); ?>"> Login </a> </span>
</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="mouse-move mouse-outer"></div>
	<div class="mouse-move mouse-inner"></div>
</body>

</html>
