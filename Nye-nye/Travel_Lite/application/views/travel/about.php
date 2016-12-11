
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
								<li><a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME</a></li>
								<li class="active"><a href="<?php $this->load->helper('url'); echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/contact/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
                <div class="clearfix"> </div>

                <?php
                  if (isset($this->session->userdata['logged_in']))
                  {
                ?>
                  <li><a href="<?php $this->load->helper('url'); echo base_url('index.php/profile/view');?>" data-hover="PROFILE">PROFILE</center></a></li>

                  <li><a href="<?php $this->load->helper('url'); echo base_url('index.php/user_authentication/logout');?>" data-hover="LOGOUT">LOGOUT</center></a></li>

                <?php
                  }
                ?>
							</ul>
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
		<div class="row-fluid">
		     				<div class="col-md-6">
										<h2><center>Who We Are</center></h2>
										<img src="<?php echo base_url(); ?>assests/images/01.jpg"  class="img-responsive" title="name">
										<p><strong><span><center>Travel Lite</center></span></strong></p>
										<p>These individuals are all students from Asia Pacific College who loves spending their idle time going to vacations. They all experience all the hassles and problems in planning a trip for their families or with their barkadas and that’s where gentlemen came up with the idea.</p>
									</div>
					<div class="col-md-6 ">
									<h2><center>Meet the Team!</center></h2>
									<br>
									<br>
									<br>
									<br>

						<div class="row">
						    <div class="col-md-4">
						          <img src="<?php echo base_url(); ?>assests/profiles/Ken.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
						        <div class="col-md-12">
						        <p>Ken Ferrer </p>
						        </div>


						    </div>

						      <div class="col-md-4">
						          <img src="<?php echo base_url(); ?>assests/profiles/allen.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
						           <div class="col-md-8">
						        <p>Allen Baldovino </p>
						        </div>
						      </div>
                               <div class="col-md-4">
						          <img src="<?php echo base_url(); ?>assests/profiles/raf.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
						           <div class="col-md-8">
						        <p>Rafael Ochotorena </p>
						        </div>
						      </div>

						</div>
							<br>
							<br>
							<br>
							<br>
							<br>
						<div class="row">
						    <center>
						    <div class="col-md-6 ">
						          <img src="<?php echo base_url(); ?>assests/profiles/letty.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
						           <div class="col-md-12">
						        <p>Letty Laureta</p>
						        </div>
						    </div>
						      <div class="col-md-6 ">
						          <img src="<?php echo base_url(); ?>assests/profiles/von.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
						           <div class="col-md-12">
						        <p>Matthew Alfafara</p>
						        </div>
						      </div>
						      </center>
						</div>
					</div>
		 </div>


								<div class="clearfix"> </div>

			</div>
</div>
<!-- about -->
