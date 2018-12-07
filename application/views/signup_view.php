<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eten Catering</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/animsition.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<a href="<?php echo base_url() ?>">
						<img src="<?php echo base_url()?>/assets/images/etenlogo.png" class="mx-auto d-block" style="padding-bottom: 30px">
					</a>
					<span class="login100-form-title" style="padding-bottom: 10px">
						Sign Up Untuk Melanjutkan
					</span>

					<form method="post" action="<?php echo base_url('Login/register') ?>">
							<h2 class="text-black text-center" style="padding-bottom: 35px">Sudah Punya akun? <a href="<?php echo base_url('Login') ?>" >LOGIN</a></h2>

							<h3> <?php echo form_error('name'); ?> </h3>
							<div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
								<input required class="input100" type="text" name="name" value="<?php echo set_value('name'); ?>">
								<span class="focus-input100"></span>
								<span class="label-input100">Nama Lengkap</span>
							</div>

							<h3> <?php echo form_error('username'); ?> </h3>
							<div class="wrap-input100 validate-input" data-validate="Username is already used" >
								<input required class="input100" type="text" name="username" value="<?php echo set_value('username'); ?>">
								<span class="focus-input100"></span>
								<span class="label-input100">Username</span>
							</div>


							<h3> <?php echo form_error('email'); ?> </h3>
							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input required class="input100" type="text" name="email" value="<?php echo set_value('email'); ?>">
								<span class="focus-input100"></span>
								<span class="label-input100">Email</span>
							</div>
							
							<h3> <?php echo form_error('password'); ?> </h3>
							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input required class="input100" type="password" name="password" value="<?php echo set_value('password'); ?>">
								<span class="focus-input100"></span>
								<span class="label-input100">Password</span>
							</div>

							<h3> <?php echo form_error('repass'); ?> </h3>
							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input required class="input100" type="password" name="repass" value="<?php echo set_value('repass'); ?>">
								<span class="focus-input100"></span>
								<span class="label-input100">Ulangi Password</span>
							</div>

							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn">
									Sign Up
								</button>
							</div>
							
							<div class="text-center p-t-46 p-b-20">
								<span class="txt2">
									or sign up using
								</span>
							</div>

							<div class="login100-form-social flex-c-m">
								<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
									<i class="fa fa-facebook-f" aria-hidden="true"></i>
								</a>

								<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</div>

					</form>

				</div>

				<div class="login100-more" style="background-image: url('<?php echo base_url()?>/assets/images/goodfood.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/animsition.js"></script>
	<script src="<?php echo base_url()?>/assets/js/popper.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>/assets/js/login.js"></script>
</body>
</html>