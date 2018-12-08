			<section class="main">
				<div class="content">
					<div class="box_images-col">
						<a href="#>"><img src="<?php echo base_url();?>assets/images/greet.png" alt="" style="width: auto; height: 125px; display: block; margin: 0 auto; object-fit: cover;"></a>
					</div>
							<div class="head" style="font-size: 25px; margin-top: 20px; line-height: 25px; color: #543b35">								
							<p><strong><center><?php echo $account->name ?></center></strong></p>
							<br>
							<br>
							<br>

							<style>
							#wrap {width: 100%}
							.entry_left{
								width: 40%;
								float: left;
							}
							.entry_right{
								width: 40%;
								float: right;
							}
							table, th, td {
							    border: #FF8C00;
							    border-collapse: collapse;
							}
							th, td {
							    padding: 5px;
							    text-align: left;    
							}
							</style>

							<div id="wrap">
							<div class="entry_left" style="margin-left: 50px; margin-bottom: 50px;">	
							<table style="width:100%">
							  <tr>
							    <th colspan="2" style="background-color:#FF8C00; padding: 8px; font-size: 20px; color: #ffff;"><strong>Personal Profile</strong></th>
							  </tr>
							  <tr>
							    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Email Address</strong></th>
							    <th style="color: #543b35; font-size: 16px; width:70%; color: #6e6e6e"><?php echo $account->email ?></th>
							  </tr>
							  <tr>
							    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Nomor Telepon</strong></th>
							    <th style="color: #543b35; font-size: 16px; width:70%;  color: #6e6e6e"><?php echo $account->phone ?></th>
							  </tr>
							</table>
							</div>

							<div class="entry_right" style="margin-right: 50px; margin-bottom: 50px;">	
							<table style="width:100%">
							  <tr>
							    <th colspan="2" style="background-color:#FF8C00; padding: 8px; font-size: 20px; color: #ffff;"><strong>My Address</strong></th>
							  </tr>
							  <tr>
							    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Alamat Pengiriman</strong></th>
							    <th style="color: #543b35; font-size: 16px; width:70%;  color: #6e6e6e"><?php echo $account->address ?></th>
							  </tr>
							  <tr>
							    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Kode Pos</strong></th>
							    <th style="color: #543b35; font-size: 16px; width:70%;  color: #6e6e6e"><?php echo $account->postal_code ?></th>
							  </tr>
							</table>
							</div>
						</div>
						<br>
						<br>
					</div>
					<br>
					<br>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div class="footer-content">
				<ul class="left_side">
					<li>
						<span>Our Mission :</span>
						<p style="line-height: 26px;">Eten Catering siap menyediakan makanan sehat yang lezat sesuai kebutuhan. Dengan ragam pilihan menu berkualitas, Eten Catering siap menjadi bekal sehat untuk keseharian Anda.</p>
					</li>
					<li>
						<span>  </span>
						<p>  </p>
					</li>
					<li>
						<span>Contact Us :</span>
						<p>Eten Catering<br />Indonesia</p>
						<p>Tel. (123) 456 789<br />catering@eten.com</p>
					</li>
				</ul>
				<ul class="right_side">
					<li>
						<span>Social Media:</span>
						<div class="social">
							<a href="https://www.facebook.com/" class="fb">Facebook</a>
							<a href="https://twitter.com/" class="tw">Twitter</a>
						</div>
						<div class="social">
							<a href="https://www.instagram.com/" class="gl">Instagram</a>
							<a href="https://id.pinterest.com/" class="pn">Pinterest</a>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
				<p class="copy">Copyright 2018 Eten Catering. All rights reserved.</p>
			</div>
		</footer>		
	</div>
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jcarousellite.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/fancySelect.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.bxslider.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/main.js"></script>
</body>
</html>