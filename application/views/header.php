<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" fcontent="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<title>Eten Catering</title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/fancySelect.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/uniform.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jquery.bxslider.css" />
	<link href="<?php echo base_url()?>/assets/css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/all.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/screen.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<div class="header-holder">
				<header id="header">
					<span class="logo"><a href="index.html">Eten Catering</a></span>
					<div class="tools-nav_holder">
						<ul class="tools-nav">
							<li><a href=""http://localhost/EtenCatering/"">My account</a></li>
							<li class="login"><a href="#">Logout</a></li>
						</ul>
						<div class="checkout">
							<span class="grey" style="text-align: center;">1 product, <span class="orange" style="text-align: center;"><strong>Rp 38.000</strong></span></span>
							<a href="<?php echo base_url()?>Cart" class="btn btn_checkout">Checkout</a>
						</div>
					</div>
					<div class="clear"></div>
					<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul class="navi">
							<li class="searc_li" >
								<div  class="ul_search li">
									<a class="search" href="#" style="color: #ffffff"><span>search</span></a>
									<form method="get" class="searchform" action="#">
										<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
										<input type="submit" class="submit" value=""  />
										<div class="clear"></div>
									</form>
								</div >
							</li>
							<li><a href="<?php echo base_url()?>">Home</a></li>
							<li><a href="<?php echo base_url()?>Product">Menu</a></li>
							<li><a href="<?php echo base_url()?>Promotion">Promotions</a></li>
							<li><a href="<?php echo base_url()?>Home/about_us">About Us</a></li>
						</ul>
						<div  class="ul_search">
							<a class="search" href="#"><span>search</span></a>
							<form method="get" class="searchform" action="#">
								<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
								<input type="submit" class="submit" value=""  />
							</form>
						</div >
					</nav>
				</header>
			</div>