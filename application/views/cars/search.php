<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url();?>">Home</a>
					<img src="<?php echo $this->config->base_url();?>images/marker_2.gif" alt="" />
					<span>Advanced Search</span>
				</div>
				<div class="main_wrapper">
					<div class="cars_categories">
						<span>All cars</span>
						<a href="#"><span>new cars</span></a>
						<a href="#"><span>used cars</span></a>
					</div>
					<h1><strong>Advanced</strong> Search</h1>
					<div class="catalog_sidebar">
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
						<?php
								$attributes = array("class"=>"form");
								echo form_open('cars/searchresults', $attributes);
								
								//print_r($items);
								//$man = $items[0];
							?>
                        <div class="sell_box sell_box_1">
						<h2><strong>Search</strong></h2>
						<div class="select_wrapper">
							<label><strong>Manufacturer:</strong></label>
							<select class="select_5">
								<option value="0" />Select
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
						<div class="select_wrapper">
							<label><strong>Model: </strong></label>
							<select class="select_5">
								<option value="0" />Select
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
						<div class="select_wrapper ">
							<label><strong>Body Type: <span></span></strong></label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />Sedan
								<option value="2" />Coupe
								<option value="3" />SUV
								<option value="4" />Hatchback
								<option value="5" />Tagra
							</select>
						</div>
						<div class="select_wrapper">
							<label><strong>Fuel Type:</strong></label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />92
								<option value="2" />95
								<option value="3" />Diesel
							</select>
						</div>
						<div class="select_wrapper">
							<label><strong>Transmission</strong></label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />Auto
								<option value="2" />Mechanic
							</select>
						</div>
						<div class="select_wrapper">
							<label><strong>Doors:</strong> <span></span></label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />2
								<option value="2" />3
								<option value="3" />4
								<option value="4" />5
							</select>
						</div>
                        
						<div class="select_wrapper ">
							<label><strong>Engine size </strong> (in cm3):</label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />1500
								<option value="2" />2000
								<option value="3" />2500
								<option value="4" />3000
								<option value="5" />4000

							</select>
						</div>
						
						
						<div class="select_wrapper ">
							<label><strong>Color:</strong></label>
							<select class="select_5">
								<option value="0" />Select
								<option value="1" />Red
								<option value="2" />Green
								<option value="3" />Blue
								<option value="4" />Grey
								<option value="5" />White
								<option value="6" />Black
							</select>
						</div>
						
                        <div class="select_wrapper ">
                        <label><strong>Year:</strong></label>
								
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
									</select><br/>
                                  
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
									
							</div>
                            <div class="select_wrapper ">
								<label><strong>Price:</strong></label>
								
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
									</select><br/>
                                   
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
									
								</div>
                                <div class="sell_submit_wrapper">
						<span class="custom_chb_wrapper fL">
							<span class="custom_chb">
								<input type="checkbox" name="" />
							</span>
							<label>Only New Cars?</label>
						</span>
						<input type="submit" value="Search" class="sell_submit" />
						<div class="clear"></div>
					</div>
                                
					</div>
						
								
						
					</div><!--end catalog-->
					
                    <div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->