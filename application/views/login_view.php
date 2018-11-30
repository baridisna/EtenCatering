<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eten Catering</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<img src="images/etenlogo.png" class="mx-auto d-block" style="padding-bottom: 30px">
					<span class="login100-form-title" style="padding-bottom: 10px">
						Sign Up Untuk Melanjutkan
					</span>

					<div id="signup">
						<h2 class="text-black text-center" style="padding-bottom: 35px">Sudah Punya akun? <a href="#" onclick="login()">LOGIN</a></h2>

					
						<div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
							<input class="input100" type="text" name="name">
							<span class="focus-input100"></span>
							<span class="label-input100">Nama Lengkap</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Username is required">
							<input class="input100" type="text" name="username">
							<span class="focus-input100"></span>
							<span class="label-input100">Username</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="repass">
							<span class="focus-input100"></span>
							<span class="label-input100">Ulangi Password</span>
						</div>

						<div class="container-login100-form-btn">
							<a href="home.html" class="login100-form-btn">
								Sign Up
							</a>
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

					</div>

					<div id="login" style="display: none;">

						<h2 class="text-black text-center" style="padding-bottom: 35px">Belum Punya akun? <a href="#" onclick="signup()">SIGNUP</a></h2>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>

						<div class="flex-sb-m w-full p-t-3 p-b-32">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
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
							<a class="login100-form-btn" href="home.html">
								Login
							</a>
						</div>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('images/goodfood.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		function login() {
			document.getElementById("login").style.display = "block";
			document.getElementById("signup").style.display = "none";
		}

		function signup(){
			document.getElementById("login").style.display = "none";
			document.getElementById("signup").style.display = "block";
		}
	</script>

</body>
</html>