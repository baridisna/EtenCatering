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
						Login Untuk Melanjutkan
					</span>

					<form action="<?php echo base_url()?>Login/Auth" method="post">

							<h2 class="text-black text-center" style="padding-bottom: 35px">Belum Punya akun? <a href="<?php echo base_url('Login/Signup') ?>">SIGNUP</a></h2>
							<h3 style="padding-bottom: 5px"><?php echo $this->session->flashdata('msg') ?></h3>
							<h3 style="padding-bottom: 5px"><?php echo $this->session->flashdata('login_first') ?></h3>

							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input required class="input100" type="text" name="email" id="login_email">
								<span class="focus-input100"></span>
								<span class="label-input100">Email</span>
							</div>
							
							
							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input required class="input100" type="password" name="password" id="login_password">
								<span class="focus-input100"></span>
								<span class="label-input100">Password</span>
							</div>

							<div class="flex-sb-m w-full p-t-3 p-b-32">
								<div class="contact100-form-checkbox">
									<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember_me" id="remember_me">
									<label class="label-checkbox100" for="ckb1">
										Remember me
									</label>
								</div>

								<div>
									<a href="#" class="txt1">
										Forgot Password?
									</a>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn">
									Login
								</button>
							</div>
						</div>
					</form>
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