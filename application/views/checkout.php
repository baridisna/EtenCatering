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
				label {
					 border:0;
					 padding:10px;
					 margin:0 0 10px;
					 display:block; 
				}

				label:hover {
					 background:#eee;
					 cursor:pointer;
				}
			</style>

			<section class="main">
				<div class="content">
					<div id="wrap" style="margin-bottom: 50px">
						<form action="<?php echo base_url()?>Order/add" method="post">
						<div class="rowBS">
							<div class="col-md-5" style="margin-left: 50px; margin-bottom: 50px;">	
								<table style="width:100%">
								  <tr>
								    <th colspan="3" style="background-color:#FF8C00; padding: 8px; font-size: 20px; color: #ffff;"><strong>My Order</strong></th>
								  </tr>

									<?php foreach ($cart_item as $key) : ?>

									  <tr style="border-top: 1px solid darkorange;">
									    <th rowspan="4" style="width: 40%; padding-top: 15px "><img src="<?php echo base_url();?>assets/images/<?= $key->photo ?>" alt="" style="width: 105px; height: 110px; margin: 0 auto; object-fit: cover; margin-left: 0px; position: relative;"></th>
									    <td colspan="2" style="width: 25%; padding: 5px; color: #543b35"><strong><?= $key->product_name ?></strong></td>
									  </tr>
									  <tr>
									    <td style="width: 25%; padding: 5px;  color: #543b35"><strong>Variant</strong></td>
									    <td><?= $key->variant_name ?></td>
									  </tr>
									  <tr>
									    <td style="width: 25%; padding: 5px;  color: #543b35"><strong>Jumlah</strong></td>
									    <td><?= $key->quantity ?></td>
									  </tr>
									  <tr>
									    <td style="width: 25%; padding: 5px;  color: #543b35"><strong>Harga</strong></td>
									    <td>Rp<?= $key->total_cost ?></td>
									  </tr>
									<?php endforeach; ?>

								  <tr style="border-top: 1px solid darkorange;">
								  	<td colspan="2" style="padding: 10px 0 5px 0"><strong><center>Shipping Charge</center></strong></td>
								  	<td>Rp5000</td>
								  </tr>	
								  <tr style="border-top: 1px solid darkorange;">
								  	<td colspan="2" style="padding: 10px 0 5px 0"><strong><center>Total Payment</center></strong></td>
								  	<td>Rp<?= $total_pay + 5000 ?></td>
								  </tr>
								</table>
							</div>

							
							<div class="col-md-5">
								<div class="col-md-12" style="margin-right: 50px; margin-bottom: 50px; padding-top: 0">	
									<table style="width:100%">
									  <tr>
									    <th colspan="2" style="background-color:#FF8C00; padding: 8px; font-size: 20px; color: #ffff;"><strong>Shipping Destination</strong></th>
									  </tr>
									  <tr>
									    <td style="color: #543b35; font-size: 16px; width:40%"><strong>Nama Penerima</strong></td>
									    <td><input class="form-group" type="text" name="recipiens_name" style="color: #543b35; width:90%;" value="<?= $cust_data->name ?>" placeholder="Nama Penerima Pesanan"></td>
									  </tr>
									  <tr>
									    <td style="color: #543b35; font-size: 16px; width:40%"><strong>Contact Person</strong></td>
									    <td><input class="form-group" type="text" name="contact_person" style="color: #543b35; width:90%;" value="<?= $cust_data->phone ?>" placeholder="Nomor Penerima Pesanan"></td>
									  </tr>
									  <tr>
									    <td style="color: #543b35; font-size: 16px; width:40%"><strong>Waktu Kirim</strong></td>
									    <td><input class="form-group" type="text" name="shipping_date" style="color: #543b35; width:90%;" value="" placeholder="Tanggal dan Jam Pengiriman"></td>
									  </tr>
									  <tr>
									    <td style="color: #543b35; font-size: 16px; width:40%; vertical-align: top;"><strong>Alamat Pengiriman</strong></td>
									    <td><textarea rows="3" class="form-group" type="text" name="shipping_address" style="color: #543b35; width:90%;" value="<?= $cust_data->address ?>" placeholder="Alamat pesanan akan dikirimkan"></textarea></td>
									  </tr>
									  <tr>
									    <th style=" vertical-align: top; color: #543b35; font-size: 16px; width:40%"><strong>Alamat Penagihan</strong></th>
									    <th><textarea rows="3" class="form-group" type="text" name="billing_address" style="color: #543b35; width:90%;" value="<?= $cust_data->address ?>" placeholder="Alamat tagihan akan ditagihkan"></textarea></th>
									  </tr>
									</table>
								</div>

								<div class="col-md-12" style="margin-right: 50px; margin-bottom: 50px;">	
									<table style="width:100%;">
									  <tr>
									    <th colspan="3" style="background-color:#FF8C00; padding: 8px; font-size: 20px; color: #ffff;"><strong>Payment Method</strong></th>
									  </tr>
									  <tr>
									    <th style="color: #543b35; font-size: 16px; width:5%">
									    	<label><input type="checkbox" value="1" name="mandiri"/></label>
									    </th>
									    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Transfer Bank</strong></th>
									    <th style="color: #543b35; font-size: 16px; width:60%;  color: #6e6e6e">Bank Mandiri 111-222-333-444 a.n Isna Nurfia Naura</th>
									  </tr>
									  <tr>
									    <th style="color: #543b35; font-size: 16px; width:5%">
									    	<label><input value="1" name="onthespot" type="checkbox"/></label>
									   </th>
									    <th style="color: #543b35; font-size: 16px; width:30%"><strong>Bayar di Tempat</strong></th>
									    <th style="color: #543b35; font-size: 16px; width:60%;  color: #6e6e6e">Pembayaran dilakukan di alamat penagihan yang tertera</th>
									  </tr>
									</table>
								</div>
							</div>

						</div>
						<!-- <li> -->

						<div class="rowBS">
							<button type="submit" class="btn btn_finalize" href="http://localhost/EtenCatering/Cart/done_ordering" style="width: auto; margin-left:auto; margin-right: auto;margin-bottom: 20px">Make An Order</button>
						</div>
					</form>
						<!-- </li> -->
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
	
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jcarousellite.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/fancySelect.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.bxslider.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/main.js"></script>
</body>
</html>