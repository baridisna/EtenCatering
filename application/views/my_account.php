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

							<button data-toggle="modal" data-target="#editProfile" class="btn" style="line-height: 20px; margin: 0 0 20px 50px">Edit Profile & Address</button>
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
							    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Username</strong></th>
							    <th style="color: #543b35; font-size: 16px; width:70%; color: #6e6e6e"><?php echo $account->UserID ?></th>
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

				<!-- Modal Edit Cart item-->
				    <div id="editProfile" class="modal fade" role="dialog">
				      	<div class="modal-dialog">

				        <!-- Modal content-->
					        <div class="modal-content">
					        	<form method="post" action="<?php base_url();?>update_customer">
						        	<div class="modal-header">	            	
						            	<h4 class="modal-title">Edit Profile & Address</h4>
						            	<button type="button" class="close" data-dismiss="modal" pull-right>&times;</button>
						        	</div>
						      		<div class="modal-body">

								        <div class="rowBS" style="padding-bottom: 5px">
								          <div class="col-md-4">
								            <label>Nama Lengkap :</label>
								          </div>
								          <div class="col-md-8">
								          	<input type="hidden" name="UserID" id="UserID" value="<?= $account->UserID ?>">
								          	<input class="form-control" type="text" name="name" value="<?= $account->name; ?>">
								          </div>
								        </div>

								        <div class="rowBS" style="padding-bottom: 5px">
								          <div class="col-md-4">
								            <label>No Telephone :</label>
								          </div>
								          <div class="col-md-8">
								            <input type="text" name="phone" class="form-control" style="width: : 100%" value="<?= $account->phone ?>">
								          </div>
								        </div>

								        <div class="rowBS" style="padding-bottom: 5px">
								          <div class="col-md-4">
								            <label>Alamat :</label>
								          </div>
								          <div class="col-md-8">
								            <textarea rows="3" name="address" class="form-control" style="width: : 100%" value="<?= $account->address ?>"></textarea>
								          </div>
								        </div>

								        <div class="rowBS" style="padding-bottom: 5px">
								          <div class="col-md-4">
								            <label>Kode Pos :</label>
								          </div>
								          <div class="col-md-8">
								            <input type="number" name="postal_code" class="form-control" style="width: : 100%" value="<?= $account->postal_code?>">
								          </div>
								        </div>
								    </div>

						            <div class="modal-footer">
							            <button class="btn btn-info" id="btn_update">Update</button>
						            </div>
					            </form>

					        </div>

				      	</div>
				    </div>
		<!-- END Modal Input Setoran -->

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
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/fancySelect.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.bxslider.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/main.js"></script>
</body>
</html>