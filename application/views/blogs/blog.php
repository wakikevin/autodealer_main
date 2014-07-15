<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url();?>">Home</a>
					<img src="<?php echo $this->config->base_url();?>images/marker_2.gif" alt="" />
					<span>Blog</span>
				</div>
				<div class="main_wrapper">
					<h1><strong>Welcome</strong>  to our blog</h1>
					<div class="blog">
						<div class="blog_post">
							<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb">
								<img src="<?php echo $this->config->base_url();?>images/pics/blog.jpg" alt="" />
							</a>
							<div class="blog_desc">
								<h4><a href="<?php echo $this->config->base_url('blogs/page');?>">Here comes the blog title</a></h4>
								<div class="grey_area">
									<a href="<?php echo $this->config->base_url('blogs/page');?>" class="blog_date">November 1, 2012</a>
									<a href="<?php echo $this->config->base_url('blogs/page');?>" class="blog_author">Admin</a>
									<div class="blog_category">
										<a href="<?php echo $this->config->base_url('blogs/page');?>">Cars</a>, 
										<a href="<?php echo $this->config->base_url('blogs/page');?>">vehicle</a>
									</div>
									<a href="example.php" class="blog_comments">7 Comments</a>
								</div>
								<div class="post">
									<p>Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.</p>
								</div>
								<a href="<?php echo $this->config->base_url('blogs/page');?>" class="more markered">Read more</a>
							</div>
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
						<div class="clear"></div>
					</div>
					<div class="sidebar">
						<div class="widget">
							<h2><strong>Links</strong> list</h2>
							<ul>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Lorem ipsum dolor </a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Dolor sit amet, consectetur</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Amet, adipiscing elit</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Elit dictum, nisi id vulput</a></li>
							</ul>
						</div>
						<!--<div class="widget">
							<h2><strong>Text</strong> widget</h2>
							<div class="post">
								<p>Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper</p>
							</div>
							<a href="#" class="more markered">Read more</a>
						</div>-->
						<div class="widget_divider"></div>
						<!--<div class="widget">
							<h2><strong>Featured</strong> work</h2>
							<div class="thumb_box">
								<a href="#" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/widget.jpg" alt="" /></a>
							</div>
							<div class="post">
								<p>Lorem ipsum dolo stet consectetur adipiscing elit vestibulu.</p>
							</div>
							<a href="#" class="more markered">Read more</a>
						</div>
-->						<div class="tabs_widget tabs_wrapper section">
							<ul class="tabs">
						    	<li class="current">Recent</li>
						    	<li>Popular</li>
						 	</ul>
						 	<div class="box visible">
						 		<div class="tab_post">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_1.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_2.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post last">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_3.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						  	</div>
						  	<div class="box">
						  		<div class="tab_post">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_3.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_2.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						    	<div class="tab_post last">
						 			<a href="<?php echo $this->config->base_url('blogs/page');?>" class="thumb"><img src="<?php echo $this->config->base_url();?>images/pics/tab_1.jpg" alt="" /></a>
						 			<div class="desc">
						 				<a href="<?php echo $this->config->base_url('blogs/page');?>">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						  	</div>
						</div>
						<div class="widget_divider"></div>
						<!--<div class="widget">
							<h2><strong>Twitter</strong> feed</h2>
							<ul class="twitter_feed">
								<li>
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="http://twitter.com/">http://automarket.com/twitter</a>
								</li>
								<li>
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="http://twitter.com/">http://automarket.com/twitter</a>
								</li>
								<li class="last">
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="http://twitter.com/">http://automarket.com/twitter</a>
								</li>
							</ul>
						</div>
						<div class="widget tags_widget">
							<h2><strong>Popular</strong> tags</h2>
							<ul class="tags">
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Cars</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Vehicles</a></li>
								<li class="last"><a href="<?php echo $this->config->base_url('blogs/page');?>">Trucks</a></li>
								<li class="active"><a href="<?php echo $this->config->base_url('blogs/page');?>">Automotive</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Engine</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Fix</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Types</a></li>
								<li><a href="<?php echo $this->config->base_url('blogs/page');?>">Sport</a></li>
							</ul>
						</div>
						<div class="widget_divider"></div>-->
						<!--<div class="widget">
							<h2><strong>Accordion</strong> widget</h2>
							<div class="accordion">
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box last">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
							</div>
						</div>-->
					</div>
					<div class="clear mb1"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->