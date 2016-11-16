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
								<li><a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME</a></li>
								<li><a href="<?php echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li class="active"><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
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
<!-- destination -->	
<div class="destination">
	<div class="container">
	 <div class="desti">
		<h3>Destinations</h3>
		<img src="<?php echo base_url(); ?>assests/images/dest_banner.jpg" class="img-responsive" alt=""/>
	</div>
	<div class="grids">
      	<div class="box1">
                                <div class="col-md-4 padding">
                                    <h4>This Week's Top 10</h4>
                                    <ul class="list list-pad">
                                        <li class="list-bg"><span>1.</span><a href="#">BATANGAS ROAD TRIP</a></li>
                                        <li class="list-bg1"><span>2.</span><a href="#">BALER, AURORA</a></li>
                                        <li class="list-bg"><span>3.</span><a href="#">PANGASINAN</a></li>
                                        <li class="list-bg1"><span>4.</span><a href="#">SAN ANTONIO, ZAMBALES</a></li>
                                        <li class="list-bg"><span>5.</span><a href="#">TAGAYTAY CITY</a></li>
                                        <li class="list-bg1"><span>6.</span><a href="#"> LA UNION</a></li>
                                        <li class="list-bg"><span>7.</span><a href="#">BAGUIO CITY</a></li>
                                        <li class="list-bg1"><span>8.</span><a href="#">ILOCOS</a></li>
                                        <li class="list-bg"><span>9.</span><a href="#">KALINGA</a></li>
                                        <li class="list-bg1"><span>10.</span><a href="#"> SAGADA, MOUNTAIN PROVINCE</a></li>
                                    </ul>
                                    <a href="#" class="link1">See all hotels</a>
                                </div>
                                 <div class="col-md-4 desti-middle">
                                 	<h4>Beach Vacations Near Manila</h4>
                                 	<div class="box-left">
                                    <div class="bot-img">
                                    	<img src="<?php echo base_url(); ?>assests/images/pic6.jpg" class="img-responsive" alt=""/>
                                    </div>
                                      <div class="bot-desc">
                                      	<p>Put description here. </p><br>
                                      </div>
                                   <div class="clearfix"> </div>
                                    	</div>	
                                  <div class="box-left">
                                     <div class="bot-img">
                                    	<img src="<?php echo base_url(); ?>assests/images/pic4.jpg" class="img-responsive" alt=""/>
                                    </div>
                                      <div class="bot-desc">
                                      	<p>Put description here. </p>
                                      </div>
                                    <div class="clearfix"> </div>
                                    </div>	
                                    <div class="box-left">
                                    <div class="bot-img">
                                    	<img src="<?php echo base_url(); ?>assests/images/pic5.jpg" class="img-responsive" alt=""/>
                                    </div>
                                      <div class="bot-desc">
                                      	<p>Put description here.</p>
                                       </div>
									   </div>
                                   <div class="clearfix"> </div>
								      </div>
								    <div class="col-md-4 desti-right">
                                 	<h4>Popular Destinations</h4>
                                 	<p>Put description here.</p>
                                 	<div class="desti-text">
                                 		<ul class="list1">
                                            <li><a href="#">adipiscing hotels</a></li>
                                            <li><a href="#"> tincidunt ut hotels</a></li>
                                            <li><a href="#">vulputate velit hotels</a></li>
                                            <li><a href="#">molestie hotels</a></li>
                                            <li><a href="#">luptatum hotels</a></li>
                                            <li><a href="#">claritatem hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">Investigationes hotels</a></li>
                                             <li><a href="#">claritatem hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">Investigationes hotels</a></li>
                                        </ul>
                                 	</div>
                                 	<div class="desti-text">
                                 		<ul class="list1">
                                            <li><a href="#">claritatem hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">decima hotels</a></li>
                                            <li><a href="#">Investigationes hotels</a></li>
                                           	<li><a href="#">adipiscing hotels</a></li>
                                            <li><a href="#"> tincidunt ut hotels</a></li>
                                            <li><a href="#">vulputate velit hotels</a></li>
                                            <li><a href="#">molestie hotels</a></li>
                                            <li><a href="#">adipiscing hotels</a></li>
                                            <li><a href="#"> tincidunt ut hotels</a></li>
                                            <li><a href="#">vulputate velit hotels</a></li>
                                            <li><a href="#">molestie hotels</a></li>
                                            <li><a href="#">luptatum hotels</a></li>
                                        </ul>
                                 		
                                 	</div>
                              	</div>
                              <div class="clearfix"> </div>
                              </div>  
                             <div class="clearfix"> </div>
   </div>
	</div>
	</div>