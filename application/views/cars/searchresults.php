<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url();?>">Home</a>
					<img src="<?php echo $this->config->base_url();?>images/marker_2.gif" alt="" />
					<span>Search Results</span>
				</div>
				<div class="main_wrapper">
					<div class="cars_categories">
						<span>All cars</span>
						<!--<a href="#"><span>new cars</span></a>
						<a href="#"><span>used cars</span></a>-->
					</div>
					<h1><strong>Cars</strong> (<?php echo $resultsTotal; ?> results) </h1>
					<div class="catalog_sidebar">
						<div class="search_auto">
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
								<select class="select_3">
									<option value="0" />Any
									<option value="1" />Audi
									<option value="2" />Mercedes-Benz
									<option value="3" />BMW
									<option value="4" />Lexus
									<option value="5" />Lincoln
									<option value="6" />Ford
									<option value="7" />Fiat
									<option value="8" />Dodge
								</select>
							</div>
							<label><strong>Model:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0" />Any
									<option value="1" />R8
									<option value="2" />S500
									<option value="3" />540i
									<option value="4" />RX300
									<option value="5" />Navigator
									<option value="6" />Taurus
									<option value="7" />Doblo
									<option value="8" />Viper
								</select>
							</div>
							<label><strong>Year:</strong></label>
							<div class="select_box_2">
								<select class="select_4">
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
								<select class="select_4">
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
								<select class="select_4">
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
								<select class="select_4">
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
								<select class="select_4">
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
								<select class="select_4">
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
							<div class="clear"></div>
						</div>
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
					</div>
					<div class="main_catalog">
						<div class="top_catalog_box">
							<!--<div class="switch">
								<span class="table_view"></span>
								<!--<a href="./05_catalog_grid.html" class="list_view"></a>
							</div>
							<div class="sorting drop_list">
								<strong>Sort by: </strong>
								<div class="selected">
									<span><a href="#">Date</a></span>
									<ul>
										<li><a href="#">Date</a></li>
										<li><a href="#">Price</a></li>
										<li><a href="#">Name</a></li>
										<li><a href="#">Manufacturer</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="view_on_page drop_list">
								<strong>View on page:</strong>
								<div class="selected">
									<span><a href="#">10</a></span>
									<ul>
										<li><a href="#">10</a></li>
										<li><a href="#">20</a></li>
										<li><a href="#">50</a></li>
										<li><a href="#">100</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="pagination">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="space">...</li>
									<li><a href="#">8</a></li>
									<li class="next"><a href="#"><img src="<?php echo $this->config->base_url();?>images/page_next.gif" alt="" /></a></li>
								</ul>
							</div>
							<div class="clear"></div>-->
						</div>
                        
						<ul class="catalog_table">
                        	<?php 
							
							foreach($results as $item):
							?>
							<li>
								<a href="<?php echo $this->config->base_url('cars/car?i='.$item->id);?>" class="thumb"><img style="width:165px" src="<?php echo $this->config->base_url();?>uploads/<?php echo $item->image_name; ?>" alt="" /></a>
								<div class="catalog_desc">
									<div class="location">Location: Nairobi, Kenya</div>
									<div class="title_box">
										<h4><a href="<?php echo $this->config->base_url('cars/searchresults?m='.$item->manufacturer_id); ?>"><?php echo $item->manufacturer_name. ' : '.$item->model_name; ?> </a></h4>
										<div class="price"><?php echo $item->currency.' '.$item->vehicle_price; ?></div>
									</div>
									<div class="clear"></div>
									<div class="grey_area">
										<span>Registration <?php echo $item->year; ?></span>
										<span><?php echo $item->cc_value; ?> CC</span>
										<span><?php echo $item->doors; ?></span>
										<span>Body <?php echo $item->bodytype_name; ?></span>
										<!--<span>80 000 Miles</span>-->
									</div>
									<a href="<?php echo $this->config->base_url('cars/car?i='.$item->id);?>" class="more markered">View details</a>
								</div>
							</li>
                            <?php
							endforeach;
							?>
							
						</ul>
						<div class="bottom_catalog_box">
							<div class="pagination">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="space">...</li>
									<li><a href="#">8</a></li>
									<li class="next"><a href="#"><img src="<?php echo $this->config->base_url();?>images/page_next.gif" alt="" /></a></li>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->