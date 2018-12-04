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
										<option value='Popular'>Populer</option>
										<option value='Price'>Price</option>
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
				</div>
			</section>
		</div>
		<footer id="footer">
<div class="footer-content">
				<ul class="left_side">
					<li>
						<span><strong>Our Mission :</strong></span>
						<p style="line-height: 26px;">Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia.</p>
					</li>
					<li>
						<span>  </span>
						<p>  </p>
					</li>
					<li>
						<span><strong>Contact Us :</strong></span>
						<p>Eten Catering<br />Indonesia</p>
						<p>Tel. (123) 456 789<br />catering@eten.com</p>
					</li>
				</ul>
				<ul class="right_side">
					<li>
						<span><strong>Social Media:</strong></span>
						<div class="social">
							<a href="#" class="fb">Facebook</a>
							<a href="#" class="tw">Twitter</a>
						</div>
						<div class="social">
							<a href="#" class="gl">Instagram</a>
							<a href="#" class="pn">Pinterest</a>
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