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
							<a href="">Article Categories</a>
							<i class="icon-angle-right"></i>
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
									List of Categories 
								</h3>
                                
                                <div class="pull-right">
                                	<a href="<?php echo $this->config->base_url('categories/edit');?>" class="btn " rel="tooltip" title="Add New">Add New Category </a>
                                </div>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin dataTable table-bordered">
									<thead>
										<tr>
                                        	<th>#</th>
											<th>Category Name</th>
											<th class='hidden-350'>Status</th>
											
											<th class='hidden-480'>Options</th>
										</tr>
									</thead>
									<tbody>
                                    
                                   <?php
								   $x = 1;
								   	foreach($items as $item):
										//print_r($item);
										
										if($item->state):
											$css = 'label-satgreen';
											$status = 'Active';
										else:
											$css = 'label-lightred';
											$status = 'In - Active';
										endif;
									?>
										<tr>
											<td >
												<?php echo $x; ?>
											</td>
											<td><?php echo $item->category_name; ?></td>
											<td class='hidden-350'><span class="label <?php echo $css; ?>"><?php echo $status; ?></span></td>
											<td class='hidden-480'>
												<a href="<?php echo $this->config->base_url('categories/edit?id='.$item->id);?>" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
												<a href="<?php echo $this->config->base_url('categories/edit?id='.$item->id);?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												
											</td>
										</tr>
                                        
									<?php
										$x++;
											
										endforeach;
									
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>