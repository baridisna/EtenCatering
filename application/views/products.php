			<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="<?php echo base_url()?>home">Home</a></li>
								<li>Menu</li>
							</ul>
						</div>
					</section>
					<div class="top-bar">
						<form class="form-sort" action="#">
							<fieldset>
								<div class="row">
									<label for="sort"><strong>Sort by :</strong></label>
									<select id="sort">
										<option value=''>Select</option>
										<option>Populer</option>
										<option value='<?= $price->product_price; ?>'>Price</option>
									</select>
								</div>
								<div class="row">
									<label for="page"><strong>Products per page:</strong></label>
									<select id="page">
										<option value=''>Select</option>
										<option>8</option>
										<option>12</option>
									</select>
								</div>
								<div class="row">
									<label for="page"><strong>Meal's origin:</strong></label>
									<select id="page">
										<option value=''>Select</option>
										<option>Western</option>
										<option>Indonesian</option>
									</select>
								</div>
								<div class="row">
									<label for="page"><strong>Type of meal:</strong></label>
									<select id="page">
										<option value=''>Select</option>
										<option>Appetizer</option>
										<option>Main Course</option>
										<option>Dessert</option>
									</select>
								</div>
							</fieldset>
						</form>
					</div>
					<ul class="item-product">
						<?php foreach ($data->result() as $key) : ?>
						<li>							
							<div class="item">
								<div class="image">
									<a href="<?php echo base_url(); ?>product/product_detail/<?= $key->product_id ?>"><img src="<?=base_url(); ?>assets/images/<?= $key->photo; ?>"  alt="" /></a>
								</div>
								<span class="name"><?= $key->product_name; ?></span>
								<span class="name2">Rp <?= $key->product_price;?></span>
							</div>							
						</li>
						<?php endforeach; ?>
					</ul>
					<div class="top-bar top-bar-add">
						<ul class="paging">
							<li class="prev"><a href="#">prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="next"><a href="#">next</a></li>
						</ul>
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
				<p class="copy"><strong>Copyright 2018 Eten Catering. All rights reserved.</strong></p>
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