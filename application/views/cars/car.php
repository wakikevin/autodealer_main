<!--BEGIN CONTENT-->
	<?php //print_r($images); ?>
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url(); ?>">Home</a>
					<img src="<?php echo $this->config->base_url(); ?>/images/marker_2.gif" alt="" />
					<a href="<?php echo $this->config->base_url('cars/'); ?>">Cars</a>
					<img src="<?php echo $this->config->base_url(); ?>/images/marker_2.gif" alt="" />
					<a href="<?php echo $this->config->base_url('cars/searchresults?m='.$results->manufacturer_id); ?>"><?php echo $results->manufacturer_name; ?></a>
					<img src="<?php echo $this->config->base_url(); ?>/images/marker_2.gif" alt="" />
					<span><?php echo $results->manufacturer_name.'-'.$results->model_name; ?></span>
				</div>
				<div class="main_wrapper">
					<div class="cars_id">
						<div class="id">Offer ID <span>AUD - 00<?php echo $results->id; ?></span></div>
						<div class="views">The offer had 1944 Views</div>
					</div>
					<h1><strong><?php echo $results->manufacturer_name; ?></strong> <?php echo ' '.$results->model_name; ?></h1>
					<div class="car_image_wrapper">
						<div class="big_image">
							<a href="<?php echo $this->config->base_url(); ?>/uploads/<?php echo $results->image_name; ?>" rel="car_group">
								<img src="<?php echo $this->config->base_url(); ?>/images/zoom.png" alt="" class="zoom" />
								<img style="width:480px;height:292px;" src="<?php echo $this->config->base_url(); ?>/uploads/<?php echo $results->image_name; ?>" alt="" />
							</a>
						</div>
						<div class="small_img">
                        	<?php
							foreach($images as $image):
							?>
								<a href="<?php echo $this->config->base_url(); ?>/uploads/<?php echo $image->image_name; ?>" rel="car_group">
									<img src="<?php echo $this->config->base_url(); ?>/uploads/<?php echo $image->image_name; ?>" alt="" />
								</a>
							<?php
							endforeach;
							?>
						</div>
					</div>
					<div class="car_characteristics">
                    	
						<a href="#" class="print"></a>
						<div class="price"><?php echo $results->vehicle_price .' '.$results->currency ; ?> <span>* Price negotiable</span></div>
						<div class="clear"></div>
						<div class="features_table">
							<div class="line grey_area">
								<div class="left">Model, Body type:</div>
								<div class="right"><?php echo $results->manufacturer_name.' '.$results->model_name.','.$results->bodytype_name; ?></div>
							</div>
							<div class="line">
								<div class="left">Fabrication:</div>
								<div class="right"><?php echo $results->year; ?></div>
							</div>
							<div class="line grey_area">
								<div class="left">Fuel:</div>
								<div class="right"><?php echo $results->fueltype_name; ?></div>
							</div>
							<div class="line">
								<div class="left">Engine:</div>
								<div class="right"><?php echo $results->cc_value .' cc'; ?></div>
							</div>
							<div class="line grey_area">
								<div class="left">Transmision:</div>
								<div class="right"><?php echo $results->transmission_name; ?></div>
							</div>
							<div class="line">
								<div class="left">Color:</div>
								<div class="right"><?php echo $results->color_name; ?></div>
							</div>
							<div class="line grey_area">
								<div class="left">Doors:</div>
								<div class="right"><?php echo $results->doors; ?></div>
							</div>
							<!--<div class="line">
								<div class="left">CO2-Emissions combined:</div>
								<div class="right">ca 423 g/km</div>
							</div>-->
						</div>
						<div class="wanted_line">
							<div class="left">You want to sell a similar car?</div>
							<div class="right">
								<a href="<?php echo $this->config->base_url('cars/add'); ?>">add an offer</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="info_box">
						<div class="car_info">
							<div class="info_left">
								<h2><strong>Vehicle</strong> information</h2>
								<p><strong>Features:</strong><br />
                                <?php foreach($features as $feature): ?>
                                	<?php echo $feature->equipment_name; ?> , <br/>
                                 <?php endforeach; ?>
                                
                                </p>
							</div>
							<div class="info_right">
								<h2><strong>More</strong> info</h2>
								<p class="first"><strong>Test Description of vehicle</strong></p>
								
							</div>
							<div class="clear"></div>
						</div>
						<div class="car_contacts">
							<h2><strong>Contact</strong> details</h2>
							<p>AutoMarket does not store additional information about the seller except for those contained in the announcement.</p>
							<div class="left">
                            	<?php //print_r($dealer); ?>
								<div class="phones detail single_line spaced"><?php echo $dealer->phone; ?></div>
								<div class="email detail single_line"><a href="mailto:<?php echo $dealer->email; ?>" class="markered">Contact vendor via e-mail</a></div>
							</div>
							<div class="right">
								<div class="addr detail single_line"><?php echo $dealer->city; ?> , <?php echo $dealer->country_name; ?>, <?php echo $dealer->region; ?></div>
								<div class="web detail single_line"><a href="#">http://www.dealer.automarket.com</a></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="car_sidebar">
						<div class="calculator">
							<h3><strong>Loan</strong> calculator</h3>
							<label><strong>Loan Amount:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0" />0.00 Kshs
									<option value="1" />10.00 Kshs
									<option value="2" />100.00 Kshs
									<option value="3" />1000.00 Kshs
									<option value="4" />10000.00 Kshs
									<option value="5" />100000.00 Kshs
									<option value="6" />1000000.00 Kshs
									<option value="7" />10000000.00 Kshs
									<option value="8" />100000000.00 Kshs
								</select>
							</div>
							<label><strong>Down Payment:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0" />0.00 Kshs
									<option value="1" />10.00 Kshs
									<option value="2" />100.00 Kshs
									<option value="3" />1000.00 Kshs
									<option value="4" />10000.00 Kshs
									<option value="5" />100000.00 Kshs
									<option value="6" />1000000.00 Kshs
									<option value="7" />10000000.00 Kshs
									<option value="8" />100000000.00 Kshs
								</select>
							</div>
							<label><strong>Annual Rate:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0" />0.00 %
									<option value="1" />10.00 %
									<option value="2" />20.00 %
									<option value="3" />30.00 %
									<option value="4" />40.00 %
									<option value="5" />50.00 %
								</select>
							</div>
							<label><strong>Loan Period:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0" />3 Years
									<option value="1" />4 Years
									<option value="2" />5 Years
									<option value="3" />6 Years
									<option value="4" />7 Years
								</select>
							</div>
							<input type="submit" value="calculate" class="btn_calc" />
							<div class="clear"></div>
						</div>
						<div class="banner">
							<a href="#"><img src="<?php echo $this->config->base_url(); ?>/images/pics/banner_car.jpg" alt="" /></a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="recent_cars">
						<h2><strong>Similar</strong> offers</h2>
						<ul>
							
                            	 <?php //print_r($recent);
								
									foreach($recent as $item):
								 ?>
								<li>
								<a href="<?php echo $this->config->base_url('cars/car?i='.$item->id);?>">

								<img style="height:164px;" src="<?php echo $this->config->base_url(); ?>/uploads/<?php echo $item->image_name; ?>" alt="image coming soon!" />

								<div class="description">

									

										<?php echo $item->model_name; ?><br/>Registration <?php echo $item->year; ?><br /><?php echo $item->cc_value; ?> CC<br /><?php echo $item->doors; ?><br />Body <?php echo $item->bodytype_name; ?>

									

								</div>

								<div class="title">
									<?php echo $item->manufacturer_name; ?> 

										<span class="price"><?php echo $item->currency.' '.$item->vehicle_price; ?></span>

									</p>

								</div>

							</a>
							</li>
							<?php 
							endforeach;
							?>
							<!--<li class="last">
								<a href="product.html">
									<img src="<?php echo $this->config->base_url(); ?>/images/pics/recent_1.jpg" alt="" />
									<div class="description">Registration 2010<br />3.0 Diesel<br />230 HP<br />Body Coupe<br />80 000 Miles</div>
									<div class="title">Mercedes-Benz <span class="price">kes  115 265</span></div>
								</a>
							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->