<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="index.html">Home</a></li>
								<li>Cart</li>
							</ul>
						</div>
					</section>
					<table class="list_table">
						<tr>
							<td class="braun first">
								<span>Item</span>
							</td>
							<td class="braun price">
								<span>Price</span>
							</td>
							<td class="braun qua"><span>Quantity</span></td>
							<td class="braun total"><span>Total</span></td>
							<td class="braun last"></td>
						</tr>
					<?php foreach ($cart_item as $key) : ?>
						<tr>
							<td class="white first">
								<img src="<?php echo base_url()?>assets/images/<?= $key->photo ?>" height="110" width="105" alt="" />
								<div class="description">
									<h3><a href="#"><?= $key->product_name ?></a></h3>
									<p>variant: <?= $key->variant_name ?></p>
								</div>
							</td>
							<td class="white two">Rp<?= $key->unit_cost ?></td>
							<td class="white three"><?= $key->quantity ?> porsi</td>
							<td class="white four">Rp<?= $key->unit_cost * $key->quantity ?></td>
							<td class="white last"><div class="row">
								<button class="btn" style="margin: 5px; background: dodgerblue; color: white; line-height: 15px">Edit</button>
								<button class="btn-delete" style="margin-top: 5px">delete</button>	
							</div></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<div class="box_sub_total">
						<h4>Subtotal: Rp <?php echo $total_pay ?></h4>
						<h4 style="color: orangered">Total to pay: Rp <?php echo $total_pay ?></h4>
						<a class="btn btn_finalize" href="#" style="padding: 0">Checkout and pay</a>
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