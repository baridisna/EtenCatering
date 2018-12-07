<section class="main">	
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="<?php echo base_url()?>home">Home</a></li>
								<li><a href="<?php echo base_url()?>product">Menu</a></li>
								<li>Product Description</li>
							</ul>
						</div>
					</section>
					<div class="details-info">
						<div class="item">
							<div class="image1">
							 <img src="<?php echo base_url();?>/assets/images/<?= $detail->photo?>" height= '500' alt="" />
							</div>
						</div>
						<div class="description">
							<div class="head">
								<h1 class="title"><strong><?= $detail->product_name?></strong></h1>
								<h2>Review : <?= $detail->product_review?></h2>
								<?php foreach ($jenis as $key) : ?>
								<h3>- <?= $key->variant_name?> : Rp <?= $key->price?> / porsi</h3>
								<?php endforeach; ?>
							</div>
							<div class="section">
								<form class="form-sort page" action="<?php echo base_url(); ?>product/cart">
									<fieldset>
										<div class="row">
											<div class="row">
												<label for="price"><strong>Packet :</strong></label>
												<select id="price">
													<option value="">Select</option>
													<?php foreach ($jenis as $key) : ?>
													<option><?= $key->variant_name?></option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="row">
												<label for="quantity"><strong>Quantity :</strong></label>
													<input type="number" class="btn-qty" />
											</div>
											<div class="clear"></div>
										</div>
										<input type="submit" value="Add to cart" class="btn pink" />
									</fieldset>
								</form>
							</div>
							<div id="tabs">
								<ul>
									<li><a href="#tabs-1">Product Information</a></li>
									<li><a href="#tabs-3">Reviews</a></li>
								</ul>
								<div id="tabs-1"><?= $detail->product_description?></div>
								<div id="tabs-3">
									<ul class="reviews">
										<li>
											<p class="name">Izna, 25.08.2018</p>
											<p>Enak banget, salah satu makanan favoritku nih</p>
										</li>
										<li class="light">
											<p class="name">Vela, 24.08.2018</p>
											<p>Aku orangnya ga terlalu suka makanan manis, tapi ini rasanya lain daripada yang lain</p>
										</li>
										<li>
											<p class="name">Hapiz, 21.08.2018</p>
											<p>Selalu bisa buat oleh-oleh buat keluarga di Depok</p>
										</li>
										<li class="light">
											<p class="name">Breel, 24.07.2018</p>
											<p>Always be my favorite lah kalo yang satu ini, manis iya, asem iya, asin iya. Super lengkap untuk melengkapi hidupku yang sepi</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
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