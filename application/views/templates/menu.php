<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="<?php echo $this->config->base_url();?>">Auto<span>Dealer</span></a>
				</div>
				<div class="header_contacts">
                	<div class="banner_2">
						<a href="<?php echo $this->config->base_url('cars/add');?>"><strong>Sell</strong> A Car?</a>
					</div>
					
				</div>
				<div class="socials">
					<a href="#"><img src="<?php echo $this->config->base_url();?>images/fb_icon.png" alt="" /></a>
					<a href="#"><img src="<?php echo $this->config->base_url();?>images/twitter_icon.png" alt="" /></a>
					<a href="#"><img src="<?php echo $this->config->base_url();?>images/in_icon.png" alt="" /></a>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Home</span>
						<ul>	
                        	<!--<li><?php echo $page; ?> </li>-->
							<li <?php echo ($page == 'index') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url();?>">Home</a></li>
							<li <?php echo ($page == 'about') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url('page/about');?>">About Us</a></li>
							<li <?php echo ($page == 'blog') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url('blogs/blog');?>">Blog</a></li>
							<li <?php echo ($page == 'news') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url();?>">News</a></li>
							<li <?php echo ($page == 'add') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url('cars/add');?>">For Sellers</a></li>
							<li <?php echo ($page == 'contacts') ? 'class="current"' : '' ;?>><a href="<?php echo $this->config->base_url('page/contacts');?>">Contacts</a></li>
						</ul>
					</div>
					<div id="search_form">
						<form method="get" action="./catalog" />
							<input type="text" onblur="if(this.value=='') this.value='Search on site';" onfocus="if(this.value=='Search on site') this.value='';" value="Search on site" class="txb_search" />
							<input type="submit" value="Search" class="btn_search" />
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--EOF HEADER-->