			<section class="main">				
				<div class="content">
					<br>
					<div class="head" style="font-size: 45px">								
							<p><strong><center>PROMOTIONS</center></strong></p>
					</div>
						<br>
						<br>					
					<ul class="item-product">
						<?php foreach ($data->result() as $key) : ?>
						<li>
							<div class="item">
								<div class="image">
									<a href=""><img src="<?=base_url(); ?>assets/images/<?= $key->photo_promosi; ?>"  alt="" /></a>
								</div><br>
								<span style="font-size: 15px; line-height: 0px;"><strong><?= $key->promotions_name; ?></strong></span>
								<br>
								<span class="name1" style="color: #6e6e6e">Valid Until : <?= $key->promotions_date; ?></a></span>
							</div>
						</li>
						<?php endforeach; ?>
					
					<div class="clear"></div>
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