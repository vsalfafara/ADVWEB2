<?php
$this->load->helper('url');
?>

<!-- header -->
<div class="banner-1">
<div class="container">
	  <div class="header-1">
				<div class="logo1">
					<a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">

					<span class="menu"> </span>
						<ul class="cl-effect-16">
							<li><a href="<?php echo base_url('index.php/index/view');?>" data-hover="HOME">HOME</a></li>
								<li class="active"><a href="<?php echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php echo base_url('index.php/contact/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
												
								<?php

								if (isset($this->session->userdata['logged_in']))
								{

								?>

								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/user_authentication/logout');?>" data-hover="LOGOUT">LOGOUT</a></li>

								<?php
								}
								?>
				</div>
						<div class="clearfix"> </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
			</div>
			</div>
  </div>
<!-- header -->
<!-- about -->	
		<div class="about">
		<div class="container">
				<div class="col-md-4 about-topgrid1">
										<h3>Who We Are</h3>
										<img src="<?php echo base_url(); ?>assests/images/01.jpg"  class="img-responsive" title="name">
										<p>Travel Lite</p>
										<p>These individuals are all students from Asia Pacific College who loves spending their idle time going to vacations. They all experience all the hassles and problems in planning a trip for their families or with their barkadas and that’s where gentlemen came up with the idea.</p>
									</div>
					<div class="col-md-4 about-histore">
									<h3>Our History</h3>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p></p></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p></p></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p></p></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p></p></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p></p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
					<div class="col-md-4 about-services">
									<h3>our services</h3>
									<h4>Put description here</h4>
									<p>.</p>
									<ul>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<div class="clearfix"> </div>
									</ul>
								</div>
								<div class="clearfix"> </div>
						
			</div>
</div>
<!-- about -->	