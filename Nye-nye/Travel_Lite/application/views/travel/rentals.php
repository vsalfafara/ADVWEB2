
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
								<li>
									<a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME
									</a>
								</li>
								<li>
									<a href="<?php  echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a>
								</li>
								<li class="active"><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php  echo base_url('index.php/contacts/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
									<div class="clearfix"> </div>
									
                                    <?php
        if (isset($this->session->userdata['logged_in']))
                {

                ?>

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

<!-- vehicle -->
<center><label style="margin-top:5%; font-size: 18px;">Choose your Vehicle: </label></center>
<div class="transaction" style="margin-left: 10%; margin-bottom: 20%;">
<div class="container">
	<div class="hover11 column">
			<!--BUS-->
			<div>
			<label>BUS</label><br>
				<img src="<?php echo base_url(); ?>assests/images/bus.png" style="height:200px; width:400px;"/><br/>

					<form action="<?php echo base_url('index.php/privateBus/view');?>">
					<button class="btn private btn-1b"> Private </button>
					</form>

					<form action="<?php echo base_url('index.php/publicBus/view');?>">
					<button class="btn private btn-1b"> Public </button>
					</form>
			</div>
			<!--VAN-->
			<div>
			<label>VAN</label><br>
				<img src="<?php echo base_url(); ?>assests/images/van.png" style="height:200px; width:350px;"/><br/>

					<form action="<?php echo base_url('index.php/privateVan/view');?>">
					<button class="btn private btn-1b"> Private </button>
					</form>
			</div>

		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--vehicle-->