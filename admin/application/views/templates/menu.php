<!-- Contains the top menu  and sibar nav , opens the main div-->

<?php

//get required data
$name = $this->session->userdata('name');

?>
<body>

	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">ADMIN</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li class='active'>
					<a href="<?php echo $this->config->base_url();?>">
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Configuration</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo $this->config->base_url('manufacturers');?>">Manufacturers</a>
						</li>
						<li>
							<a href="<?php echo $this->config->base_url('models');?>">Car Models</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('locations');?>">Locations</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('conditions');?>">Vehicle Condition</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('equipment');?>">Vehicle Features</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('years');?>">Years</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('bodytypes');?>">Body Types</a>
						</li>
                        <li>
							<a href="<?php echo $this->config->base_url('transmissions');?>">Vehicle Transmission</a>
						</li>
                       <!-- <li>
							<a href="<?php echo $this->config->base_url('');?>">Vehicle Transmission</a>
						</li>
						<li>
							<a href="vehicletypes">Vehicle Types</a>
						</li>
						<li>
							<a href="fueltypes">Fuel Types</a>
						</li>-->
					</ul>
				</li>
				
				<li>
					<a href="<?php echo $this->config->base_url('cars');?>" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Vehicles</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo $this->config->base_url('cars/edit');?>">Add New</a>
						</li>
						<li>
							<a href="<?php echo $this->config->base_url('cars');?>">View Listing</a>
						</li>
						
					</ul>
				</li>
				
				<li>
					<a href="<?php echo $this->config->base_url('users');?>" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Users</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo $this->config->base_url('users/edit');?>">Create New</a>
						</li>
						<li >
							<a href="<?php echo $this->config->base_url('users');?>" data-toggle="dropdown" class='dropdown-toggle'>User Profiles</a>
							
						</li>
						
					</ul>
				</li>
				
			</ul>
			<div class="user">
				<!--<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
						<ul class="dropdown-menu pull-right message-ul">
							<li>
								<a href="#">
									<img src="img/demo/user-1.jpg" alt="">
									<div class="details">
										<div class="name">Jane Doe</div>
										<div class="message">
											Lorem ipsum Commodo quis nisi ...
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/user-2.jpg" alt="">
									<div class="details">
										<div class="name">John Doedoe</div>
										<div class="message">
											Ut ad laboris est anim ut ...
										</div>
									</div>
									<div class="count">
										<i class="icon-comment"></i>
										<span>3</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo $this->config->base_url(); ?>img/demo/user-3.jpg" alt="">
									<div class="details">
										<div class="name">System Admin</div>
										<div class="message">
											Excepteur Duis magna dolor!
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a>
							</li>
						</ul>
					</li>
					
				</ul>-->
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $name; ?> <img src="<?php echo $this->config->base_url();?>img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<!--<li>
							<a href="users/profile">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>-->
						<li>
							<a href="<?php echo $this->config->base_url('users/logout');?>">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--end navigation-->
    
    
    <!--open main page with sidebar-->
    
    <div class="container-fluid" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Content</span></a>
				</div>
				<ul class="subnav-menu">
					<li class='dropdown'>
						<a href="<?php echo $this->config->base_url('articles');?>" data-toggle="dropdown">Articles</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo $this->config->base_url('categories');?>">Article Categories</a>
							</li>
							<li>
								<a href="<?php echo $this->config->base_url('articles');?>">New Article</a>
							</li>
							<li class='dropdown-submenu'>
								<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">This is level 3</a>
									</li>
									<li>
										<a href="#">Unlimited levels</a>
									</li>
									<li>
										<a href="#">Easy to use</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">News</a>
					</li>
					<li>
						<a href="#">Pages</a>
					</li>
					<li>
						<a href="#">Comments</a>
					</li>
				</ul>
			</div>

		</div>
        <!--end left-->