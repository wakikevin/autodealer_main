<!-- Javascript to get models-->
<script type="text/javascript">

	//get Models for selected manufacturer
	function getModels(manID){
		
		$.get('<?php echo $this->config->base_url('cars/models');?>',{manID:manID},function(data){
			$('#models_holder').html(data);
			
		});
		
	}
	
	//function to preview images
	function previewImage(input,id){
		//alert (id);
		//$('#imgPlaceholder').attr('src',img);
		if (input.files && input.files[0]) {
			var filerdr = new FileReader();
			filerdr.onload = function(e) {
			$('#'+id).attr('width','140px');	
			$('#'+id).attr('height','105px');
			$('#'+id).attr('src', e.target.result);
			}
			filerdr.readAsDataURL(input.files[0]);
		}
			
	}
</script>

<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
            <?php
					$attributes = array("class"=>"form");
					echo form_open_multipart('cars/edit', $attributes);
					
				?>
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url();?>">Home</a>
					<img src="<?php echo $this->config->base_url();?>images/marker_2.gif" alt="" />
					<span>Add an offer</span>
				</div>
				<div class="main_wrapper">
					<div class="steps">
						<span>1. new offer</span>
						<!--<a href="#"><span>2. preview</span></a>
						<a href="#"><span>3. submit</span></a>-->
					</div>
					<h1><strong>Sell</strong> your vehicle</h1>
					<div class="message">
						<h3>Sell ​​your car on <strong>AutoDealer</strong> and benefit from more than 1 million potential buyers every month!</h3>
						<!--<p>Required fields are marked with *<br />Please post offers only on the car (parts are a special category).<br />If you are a dealer, please visit the dealers section<br />If you have difficulties in posting an offer on the website, please call 0742 016 570</p>-->

                        <h2>Payment INSTRUCTIONS:</h2>
                        <h3>For M-Pesa:</h3>
                        <ul>
                        	<li>Select "Buy Goods" from the MPESA menu</li>
                            <li>Enter <strong>xxxxx </strong>as the Till Number</li>
                            <li>Enter xxx (the exact amount of the sale. Price is inclusive of 16% VAT)</li>
                            <li>Enter PIN, confirm details and await receipt.</li>
                       </ul>
                       <br/>
                        <h3>For Airtel Money:</h3>
                        <ul>
                        	<li>Send <strong>xxxxxx</strong> to 07xxxxxxxx (Price is inclusive of 16% VAT)</li>
                        </ul>
						<p>Simply enter your car's details, photos and your contacts. Your ad will go live online and be sent to our buyer list as soon as it passes our quality check.</p>
					</div>
                    
                     
					<div class="sell_box sell_box_1">
						<h2><strong>Vehicle</strong> data</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>Manufacturer:</strong></label>
							<?php echo $manufacturers; ?>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Model: </strong></label>
                            <select class="select_5"  id="models_holder" name="model" required>
                            	<option value="" >Select Model</option>
                            </select>
							
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>YOM:</strong></label>
							<?php echo $yom; ?>
						</div>
						<div class="select_wrapper">
							<label><strong>Body Type: <span>(optional)</span></strong></label>
							<?php echo $bodytype; ?>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Fuel Type:</strong></label>
							<?php echo $fueltype; ?>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Transmission</strong></label>
							<?php echo $transmission; ?>
						</div>
						<div class="select_wrapper">
							<label><strong>Doors:</strong> <span>(optional)</span></label>
							<select name="doors" class="select_5">
								<option value="" />Select Doors
								<option value="1" />2
								<option value="2" />3
								<option value="3" />4
								<option value="4" />5
							</select>
						</div>
						<div class="select_wrapper ">
							<label><span>* </span><strong>Engine size </strong> (in cm3):</label>
							<?php echo $cc; ?>
						</div>
						<div class="select_wrapper">
							<label><strong>Hp / Kw:</strong> <span>(optional)</span></label>
							<select name="hp" class="select_5">
								<option value="" />Select
								<option value="50" />50
								<option value="60" />60
								<option value="70" />70
								<option value="80" />80
								<option value="90" />90
								<option value="100" />100
							</select>
						</div>
						<div class="input_wrapper large">
							<label><strong>VIN / chassis number:</strong> <span>(optional)</span></label>
							<input type="text" class="txb large" name="chassis" value="" />
						</div>
						<div class="select_wrapper last">
							<label><span>* </span><strong>Color:</strong></label>
							<?php echo $colors; ?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_2">
						<h2><strong>Vehicle</strong> Accessories</h2>
						<?php echo $equipment; ?>
						<div class="clear"></div>
					</div>
					
					<div class="sell_box sell_box_3">
						<h2><strong>Vehicle</strong> price</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>Price: </strong></label>
							<input type="text" class="txb" name="price" required="required" value="0.00" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" />
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>Currency: </strong></label>
							<select class="select_5" name="currency" required>
								<option value="KES" >KES</option>
								<option value="USD" >USD</option>
							</select>
						</div>
						<div class="single_chb_wrapper">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="negotiable"  value="1"/>
								</span>
								<label>Price Negotiable</label>
							</span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_4">
						<h2><strong>Vehicle</strong> photos</h2>
						<div class="foto_wrapper">
							<input type="file" class="" name="images1" onchange="previewImage(this,'imgPlaceholder')" />
                            <a href="#">
                            <img id="imgPlaceholder" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="foto_wrapper">
							<input type="file" class="" name="images2" onchange="previewImage(this,'imgPlaceholder1')" />
                            <a href="#">
                            <img id="imgPlaceholder1" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="foto_wrapper">
							<input type="file" class="" name="images3" onchange="previewImage(this,'imgPlaceholder2')" />
                            <a href="#">
                            <img id="imgPlaceholder2" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="foto_wrapper">
							<input type="file" class="" name="images4" onchange="previewImage(this,'imgPlaceholder3')" />
                            <a href="#">
                            <img id="imgPlaceholder3" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="foto_wrapper">
							<input type="file" class="" name="images5" onchange="previewImage(this,'imgPlaceholder4')" />
                            <a href="#">
                            <img id="imgPlaceholder4" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="foto_wrapper last">
							<input type="file" class="" name="images6" onchange="previewImage(this,'imgPlaceholder5')" />
                            <a href="#">
                            <img id="imgPlaceholder5" src="" alt="" class="upload" />
                            Preview  Photo
                        	</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_5">
						<h2><strong>Seller</strong> details</h2>
						<div class="input_wrapper">
							<label><span>* </span><strong>Name: </strong></label>
							<input type="text" name="seller_name" required="required" class="txb" value="" />
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>Phone: </strong></label>
							<input type="text" name="seller_phone" required="required" class="txb" value="" />
						</div>
						<div class="input_wrapper">
							<label><strong>Phone 2: </strong> <span>(optional)</span></label>
							<input type="text" name="seller_phone1" class="txb" value="" />
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>City:</strong></label>
							<input type="text" name="seller_city" required="required" class="txb" value="" />
						</div>
						<div class="select_wrapper">
							<label><strong>Country: </strong></label>
							<?php echo $countries; ?>
						</div>
						<div class="select_wrapper">
							<label><strong>County: </strong></label>
							<?php echo $counties; ?>
						</div>
                        <div class="input_wrapper">
							<label><strong>Region: </strong></label>
							<input type="text" name="seller_region" class="txb" value="" />
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>E-mail: </strong></label>
							<input type="email" required="required" name="seller_email" class="txb" value="" />
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>Password:</strong></label>
							<input type="password" name="seller_password" class="txb" value="" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_submit_wrapper">
						<span class="custom_chb_wrapper fL">
							<span class="custom_chb">
								<input type="checkbox" name="terms" value="yes" required="required" />
							</span>
							<label>I agree to the Terms and Conditions</label>
						</span>
						<input type="submit" value="Submit" class="sell_submit" />
						<div class="clear"></div>
					</div>
                    
				</div>
                
                <!--end form-->
                </form>
			</div>
            
		</div>
	<!--EOF CONTENT-->