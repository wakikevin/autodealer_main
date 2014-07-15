<!--start main content-->
<div id="main">
			<div class="container-fluid">
				 <div class="page-header">
                    <div class="pull-left">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="pull-right">
                        <!--<ul class="minitiles">
                            <li class='grey'>
                                <a href="#"><i class="icon-cogs"></i></a>
                            </li>
                            <li class='lightgrey'>
                                <a href="#"><i class="icon-globe"></i></a>
                            </li>
                        </ul>-->
                        <ul class="stats">
                            <!--<li class='satgreen'>
                                <i class="icon-money"></i>
                                <div class="details">
                                    <span class="big">$324,12</span>
                                    <span>Balance</span>
                                </div>
                            </li>-->
                            <li class='lightred'>
                                <i class="icon-calendar"></i>
                                <div class="details">
                                    <span class="big"><?php echo date('F j, Y'); ?>  </span>
                                    <span><?php echo date('L h:i'); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo $this->config->base_url('conditions');?>">Vehicle Conditions</a>
							<i class="icon-angle-right"></i>
						</li>
                        <li>
							<a href="">Add New</a>
							
						</li>
						
					</ul>
					<div class="close-bread">
						<!--<a href="#">
							<i class="icon-remove"></i>
						</a>-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									Add Condition 
								</h3>
                                
                                <div class="pull-right">
                                	<a href="<?php echo $this->config->base_url('conditions');?>" class="btn " rel="tooltip" title="Add New">Back to List </a>
                                </div>
							</div>
							<div class="box-content">
								
                                <?php
									$attributes = array("class"=>"form-horizontal form-validate");
									echo form_open('/conditions/add', $attributes);
									
									//print_r($items);
									$man = $items[0];
								?>
                                	
                                
                                	<div class="control-group">
										<label for="textfield" class="control-label">Condition Name</label>
										<div class="controls">
											<input type="text" name="condition" id="condition" class="input-xlarge" data-rule-required="true" data-rule-minlength="2" value="<?php echo $man->condition_name; ?>">
										</div>
									</div>
                                    
									<div class="control-group">
										<label for="state" class="control-label">State</label>
										<div class="controls">
											<select name="state" id="state" data-rule-required="true">
										
												<option value="1"  <?php echo ($man->state == 1) ? 'selected="selected"' : ''; ?> >Active</option>
												<option value="0" <?php echo ($man->state == 0) ? 'selected="selected"' : ''; ?>>In - active</option>
												
											</select>
										</div>
									</div>
									
									<div class="form-actions">
                                    	<input type="hidden" name="id" id="id"  value="<?php echo $man->id; ?>">
										<input type="submit" class="btn btn-primary" value="Submit">
										<button type="reset" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>