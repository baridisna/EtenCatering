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
						<div class="slid_box">
							<ul class="bxslider">
							  <li><img src="<?php echo base_url();?>/assets/images/<?= $detail->photo?>" class="responsive-img" alt="" /></li>
							</ul>
						</div>
						<div class="description">
							<div class="head">
								<h1 class="title"><strong><?= $detail->product_name?></strong></h1>
								<h2>Review : <?= $detail->product_review?></h2>
								<h3>- Satuan          Rp <?= $detail->product_satuan?> / porsi</h3>
								<h3>- Box (min 30)    Rp <?= $detail->product_box?> / porsi</h3>
								<h3>- Gubug (min 100) Rp <?= $detail->product_gubug?> / porsi</h3>
							</div>
							<div class="section">
								<form class="form-sort page" action="cart.html">
									<fieldset>
										<div class="row">
											<div class="row">
												<label for="price"><strong>Packet :</strong></label>
												<select id="price">
													<option value="">Select</option>
													<option value="Satuan">Satuan</option>
													<option value="Box">Box</option>
													<option value="Gubug">Gubug</option>
												</select>
											</div>
											<div class="row">
												<label for="quantity"><strong>Quantity :</strong></label>
												<select id="quantity">
													<option value="">Select</option>
													<option>1</option>
													<option>2</option>
												</select>
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
						<p style="line-height: 26px;">Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia.</p>
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
							<a href="#" class="fb">Facebook</a>
							<a href="#" class="tw">Twitter</a>
						</div>
						<div class="social">
							<a href="#" class="gl">Google+</a>
							<a href="#" class="pn">Pinterest</a>
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