<script type="text/javascript">



	//get Models for selected manufacturer

	function getModels(manID){

		

		$.get('<?php echo $this->config->base_url('cars/models');?>',{manID:manID},function(data){

			$('#models_holder').html(data);

			

		});

		

	}

</script>


<!--BEGIN CONTENT-->

		<div id="content">

			<div class="content">

				<div class="wrapper_1">

                	<div class="catalog_sidebar main_sidebar">

						

							<h3><strong>Listing </strong> Summary</h3>

							

							<ul>

                            	
                                <?php //print_r($totals);
								
									foreach($totals as $item):
								 ?>
									<li><a href="<?php echo $this->config->base_url('cars/searchresults?m='.$item->manufacturer_id); ?>"><?php echo $item->manufacturer_name .' ('.$item->total.') '; ?> </a></li>
                                    
                                  <?php //print_r($totals);
								
									endforeach;
								 ?>
                               <!-- <li><a href="04_catalog.html">Audi (1,540) </a></li>

                                <li><a href="04_catalog.html">Mercedes-Benz (540) </a></li>

                                <li><a href="04_catalog.html">BMW (40) </a></li>

                                <li><a href="04_catalog.html">Lexus (65) </a></li>

                                <li><a href="04_catalog.html">Lincoln (654) </a></li>

                                <li><a href="04_catalog.html">Ford (800) </a></li>

                                <li><a href="04_catalog.html">Toyota (126) </a></li>

                                <li><a href="04_catalog.html">Mitsubishi (20) </a></li>

                                <li><a href="04_catalog.html">Subaru (75) </a></li>
-->
                                

							</ul>

							

							<div class="clear"></div>

						

					</div>

					<div class="slider_wrapper">

						<div class="home_slider">

							<div class="slider slider_1">

								<div class="slide">

									<img src="images/pics/slider_img_1.jpg" alt="" />

									<div class="description">

										<h2 class="title">2012 Mercedes-Benz CLS 320</h2>

										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>

										<div class="price">kes  32 200</div>

									</div>

								</div>

								<div class="slide">

									<img src="images/pics/slider_img_2.jpg" alt="" />

									<div class="description">

										<h2 class="title">2010 Mercedes-Benz Sport</h2>

										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>

										<div class="price">kes  32 200</div>

									</div>

								</div>

								<div class="slide">

									<img src="images/pics/slider_img_3.jpg" alt="" />

									<div class="description">

										<h2 class="title">2002 Subaru Impreza</h2>

										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>

										<div class="price">kes  32 200</div>

									</div>

								</div>

								<div class="slide">

									<img src="images/pics/slider_img_4.jpg" alt="" />

									<div class="description">

										<h2 class="title">2012 Cadillac LaBaron</h2>

										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>

										<div class="price">kes  32 200</div>

									</div>

								</div>

								<div class="slide">

									<img src="images/pics/slider_img_5.jpg" alt="" />

									<div class="description">

										<h2 class="title">2012 Ferrari Maranello 320</h2>

										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>

										<div class="price">kes  32 200</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="search_auto_wrapper">

						<div class="search_auto">

							<?php

								$attributes = array("class"=>"form");

								echo form_open('cars/searchresults', $attributes);

								

								//print_r($items);

								//$man = $items[0];

							?>

								<h3><strong>Search</strong> auto</h3>

								<div class="categories">

									<input type="radio" id="search_radio_1" checked="checked" name="category" />

									<label for="search_radio_1" class="search_radio_1"></label>

									<input type="radio" id="search_radio_2" name="category" />

									<label for="search_radio_2" class="search_radio_2"></label>

									<input type="radio" id="search_radio_3" name="category" />

									<label for="search_radio_3" class="search_radio_3"></label>

									<input type="radio" id="search_radio_4" name="category" />

									<label for="search_radio_4" class="search_radio_4"></label>

								</div>

								<div class="clear"></div>

								<label><strong>Manufacturer:</strong></label>

								<div class="select_box_1">

									<?php echo $manufacturers; ?>

								</div>

								<label><strong>Model:</strong></label>

								<div class="select_box_1">

									<select class="select_5"  id="models_holder" name="model" required>

                                        <option value="" >Select Model</option>
        
                                    </select>

								</div>

								<label><strong>Year:</strong></label>

								<div class="select_box_2">

									<select class="select_2">

										<option value="0" />From

										<option value="1" />2014

										<option value="2" />2012

										<option value="3" />2011

										<option value="4" />2010

										<option value="5" />2009

										<option value="6" />2008

										<option value="7" />2007

										<option value="8" />2006

									</select>

									<select class="select_2">

										<option value="0" />To

										<option value="1" />2014

										<option value="2" />2012

										<option value="3" />2011

										<option value="4" />2010

										<option value="5" />2009

										<option value="6" />2008

										<option value="7" />2007

										<option value="8" />2006

									</select>

									<div class="clear"></div>

								</div>

								<label><strong>Price:</strong></label>

								<div class="select_box_2">

									<select class="select_2">

										<option value="0" />From

										<option value="1" />1000

										<option value="2" />2000

										<option value="3" />3000

										<option value="4" />4000

										<option value="5" />5000

										<option value="6" />6000

										<option value="7" />7000

										<option value="8" />8000

									</select>

									<select class="select_2">

										<option value="0" />To

										<option value="1" />1000

										<option value="2" />2000

										<option value="3" />3000

										<option value="4" />4000

										<option value="5" />5000

										<option value="6" />6000

										<option value="7" />7000

										<option value="8" />8000

									</select>

									<div class="clear"></div>

								</div>

								<label><strong>Mileage:</strong></label>

								<div class="select_box_2">

									<select class="select_2">

										<option value="0" />From

										<option value="1" />1000

										<option value="2" />2000

										<option value="3" />3000

										<option value="4" />4000

										<option value="5" />5000

										<option value="6" />6000

										<option value="7" />7000

										<option value="8" />8000

									</select>

									<select class="select_2">

										<option value="0" />To

										<option value="1" />1000

										<option value="2" />2000

										<option value="3" />3000

										<option value="4" />4000

										<option value="5" />5000

										<option value="6" />6000

										<option value="7" />7000

										<option value="8" />8000

									</select>

									<div class="clear"></div>

								</div>

								<div class="chb_wrapper">

									<input type="checkbox" />

									<label class="check_label">Only new cars</label>

								</div>

								<input type="submit" value="Search" class="btn_search" />

							</form>

                            

							<div class="clear"></div>

                            <ul>

                            	<li> <a href="<?php echo $this->config->base_url('cars/search');?>"><b>Advanced Search</b></a></li>

                             </ul>

						</div>

					</div>

					<div class="clear"></div>

				</div>

				<div class="recent">

					<h2><strong>Recent</strong> listings</h2>
                    
					<div class="recent_carousel">
                    	 <?php //print_r($recent);
								
									foreach($recent as $item):
								 ?>


						<div class="slide">

							<a href="<?php echo $this->config->base_url('cars/car?i='.$item->id);?>">

								<img src="uploads/<?php echo $item->image_name; ?>" alt="image coming soon!" />

								<div class="description">

									<p>

										<?php echo $item->model_name; ?><br/>Registration <?php echo $item->year; ?><br /><?php echo $item->cc_value; ?> CC<br /><?php echo $item->doors; ?><br />Body <?php echo $item->bodytype_name; ?>

									</p>

								</div>

								<div class="title">

									<p>

										<span><?php echo $item->manufacturer_name; ?> </span>

										<span class="price"><?php echo $item->currency.' '.$item->vehicle_price; ?></span>

									</p>

								</div>

							</a>

						</div>

						<?php
						endforeach;
						?>

					</div>

				</div>

				

				<div class="wrapper_2">

					<div class="left">

						

						<div class="video_box">

							<h2><strong>Video</strong> reviews</h2>

							<div class="post_block">

								<div class="preview">

									<a href="http://player.vimeo.com/video/54510052">

										<img src="images/pics/video_1.jpg" alt="" />

										<span class="hover"></span>

										<img src="images/video_play.png" alt="" class="video_play" />

									</a>

								</div>

								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>

								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>

							</div>

							<div class="post_block">

								<div class="preview">

									<a href="http://player.vimeo.com/video/13412780">

										<img src="images/pics/video_2.jpg" alt="" />

										<span class="hover"></span>

										<img src="images/video_play.png" alt="" class="video_play" />

									</a>

								</div>

								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>

								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>

							</div>

							<div class="post_block last">

								<div class="preview">

									<a href="http://player.vimeo.com/video/22884674">

										<img src="images/pics/video_3.jpg" alt="" />

										<span class="hover"></span>

										<img src="images/video_play.png" alt="" class="video_play" />

									</a>

								</div>

								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>

								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>

							</div>

							<div class="clear"></div>

						</div>

					</div>

					<div class="right">

						

						<div class="banners_wrapper">

							<div class="get_news_box">

								<h3><strong>Get</strong> daily news</h3>

								<form method="get" action="./catalog" />

									<input type="text" onblur="if(this.value=='') this.value='Enter your email';" onfocus="if(this.value=='Enter your email') this.value='';" value="Enter your email" class="txb" />

									<input type="submit" value="subscribe" class="btn_subscribe" />

								</form>

							</div>

							<div class="side_banners">

								<a href="#"><img src="images/banners/banner.jpg" alt="" /></a>

							</div>

						</div>

					</div>

					<div class="clear"></div>

				</div>

			</div>

		</div>

	<!--EOF CONTENT-->