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
							<td class="braun first" style="width: 45%">
								<span>Item</span>
							</td>
							<td class="braun price" style="width: 15%">
								<span>Price</span>
							</td>
							<td class="braun qua" style="width: 10%"><span>Quantity</span></td>
							<td class="braun total" style="width: 15%"><span>Total</span></td>
							<td class="braun last" style="width: 15%"></td>
						</tr>
					<?php foreach ($cart_item as $key) : ?>
						<tr>
							<td class="white first" style="width: 45%">
								<img src="<?php echo base_url()?>assets/images/<?= $key->photo ?>" height="110" width="105" alt="" />
								<div class="description">
									<h3><a href="#"><?= $key->product_name ?></a></h3>
									<p>variant: <?= $key->variant_name ?></p>
								</div>
							</td>
							<td class="white two" style="width: 15%">Rp<?= $key->unit_cost ?></td>
							<td class="white three" style="width: 10%"><?= $key->quantity ?> porsi</td>
							<td class="white four" style="width: 15%">Rp<?= $key->unit_cost * $key->quantity ?></td>
							<td class="white last" style="width: 15%"><div class="row" style="display: inline-flex">
								<button data-toggle="modal" data-target="#editCartItem" class="btn edit_data" id="<?= $key->product_id ?>_<?= $key->variant_id ?>_<?= $key->quantity ?>" style="margin: 5px; background: dodgerblue; color: white; line-height: 15px">Edit</button>
								<button id="del_<?= $key->cart_id ?>" class="btn-delete delete" style="margin-top: 5px">delete</button>	
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

		<!-- Modal Edit Cart item-->
		    <div id="editCartItem" class="modal fade" role="dialog">
		      	<div class="modal-dialog">

		        <!-- Modal content-->
			        <div class="modal-content">
			        	<div class="modal-header">
			            	<button type="button" class="close" data-dismiss="modal">&times;</button>
			            	<h4 class="modal-title">Edit Cart Items</h4>
			        	</div>
			      		<div class="modal-body">

					        <div class="row" style="padding-bottom: 5px">
					          <div class="col-md-4">
					            <label>Variant :</label>
					          </div>
					          <div class="col-md-8">
								<select id="variant_edit" name="variant" value="">
								</select>
					          </div>
					        </div>

					        <div class="row" style="padding-bottom: 5px">
					          <div class="col-md-4">
					            <label>Quantity :</label>
					          </div>
					          <div class="col-md-8">
					            <input type="number" name="quantity" id="qty_edit" class="form-control" style="width: : 100%" readonly required>
					          </div>
					        </div>
					    </div>

			            <div class="modal-footer">
				            <button class="btn btn-info" id="btn_update">Update</button>
				            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            </div>

			        </div>

		      	</div>
		    </div>
		<!-- END Modal Input Setoran -->

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
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/fancySelect.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.bxslider.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			  $('.delete').click(function(){
		      var el = this;
		      var id = this.id;
		      console.log(id);
		      var splitid = id.split("_");

		      // Delete id
		      var deleteid = splitid[1];

		          // AJAX Request
		          $.ajax({
		            url: '<?php echo base_url();?>Cart/delete',
		            type: 'POST',
		            data: { id:deleteid },
		            success: function(response){

		              // Removing row from HTML Table
		              $(el).closest('tr').css('background','tomato');
		              $(el).closest('tr').fadeOut(600, function(){ 
		               $(this).remove();
		              });

		              location.reload();
		            },
		            error: function(){
		              alert('Gagal menghapus');
		            }
		          });
		      });

		    $('.edit_data').click(function(){
            	var id = this.id;
            	splitid = id.split("_");
            	id_product = splitid[0];
            	id_variant = splitid[1];
            	quantity = splitid[2];

            	editCart(id_product, id_variant, quantity);
      		});

      		$('#btn_update').click(function(){
        		updateCart();
        	});

		});

		function editCart(id_product, id_variant, quantity)  {
           $.ajax({  
                url:"<?php echo base_url();?>Cart/get_product_variant",  
                method:"POST",  
                data:{id_product:id_product},  
                dataType:"json",  
                success:function(data){
                	$("select").fancySelect();

                	var options = '';
					$.each(data, function(index, value) {
					    options += '<option value="' + value.variant_id + '">' + value.variant_name + '</option>';
					});

					//variant select data
					$('#variant_edit').append(options);
					$('#variant_edit').val(id_variant);
					$('#variant_edit').trigger('update.fs');

					//quantity data
					$('#qty_edit').val(quantity);
                }  
           });
		}

		function updateCart() {
	    	var cart_id = $('#id_edit');
	    	var qty = $('#qty_edit');
	    	var variant = $('#variant_edit');

	      	$.ajax({
	        	url:"<?php echo base_url();?>Cart/Update",  
	        	type:"POST",  
		        data:{
		        	cart_id: cart_id,
		        	qty: qty,
		        	variant: variant
		        },    
	        	success:function(data){
	          		location.reload(true);
	        	}
	      	})
	  }
	</script>
</body>
</html>