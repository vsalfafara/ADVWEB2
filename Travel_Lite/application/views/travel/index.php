<?php
$this->load->helper('url');
?>
<!-- header -->
<div class="banner">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<img src="<?php echo base_url(); ?>assests/images/palawan.jpg" class="img-responsive" alt="">
			</li>
			<li>
				<img src="<?php echo base_url(); ?>assests/images/choco.jpg" class="img-responsive" alt="">
			</li>
			<li>
				<img src="<?php echo base_url(); ?>assests/images/banner3.jpg" class="img-responsive" alt="">
			</li>
		</ul>
	</div>
	<div class="header">
		<div class="logo">
			<a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" class="img-responsive" alt="" /></a>
		</div>
		<div class="head-nav">
			<span class="menu"> </span>
			<ul class="cl-effect-16">
				<li class="active"><a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME</a></li>
				<li><a href="<?php echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
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
				<div class="clearfix"> </div>
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


<!-- welcome -->
<div class="welcome">
	<div class="col-md-6 welcome-left">
		<img src="<?php echo base_url(); ?>assests/images/right.jpg" class="img-responsive" alt="" />
		<div class="welcome-lefttop">
			<h5>Why Travel Lite?</h5>
			<li><span>1.</span>We offer One day trips </li>
			<li><span>2.</span>We can get you to your destination! </li>
			<li><span>3.</span>Organizing a Team bulding or family outing? we got you fam </li>
			<li><span>4.</span>You can travel today! </li>
			<div class="button">
				<a href="http://localhost/Travel_Lite/index.php/about/view" class="btn  btn-1c btn1 btn-1d">LEARN MORE</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 welcome-right">
		<h3>welcome</h3>
		<h6>Travel Lite aims to provide an organized and systematic vacation planning to remove the hassle and to worry free about their trips for cheap service free.</h6>
		<p>Our company offers a “one stop shop” for people who don’t have enough time in planning their vacation travels, for those who doesn’t have an idea on where to spend their free days and for those who wants to experience extremes and hardcore adventures. Just tell us what you want, we got that.</p>
		  <div id="signup">
 		<a class="btn btn-large btn-info" href="http://localhost/Travel_Lite/index.php/user_authentication/new_user_registration">Sign up</a>
	  </div>
	  <div id="login">
 		<a class="btn btn-large btn-info" href="http://localhost/Travel_Lite/index.php/user_authentication/user_login_process">Login</a>
	  </div>
	</div>
	
	<div class="clearfix"> </div>
        <style>
        #signup{
        	float :right;

        }
        </style>

</div>
<!-- welcome -->
<!-- hand -->
<div class="hand">
	<div class="container">
		<h2>On the other hand, we got you fam </h2>
		<div class="col-md-3 flights">
			<i class="fligh"> </i>
			<h4 class="hcol"> Destination</h4>
			<p class="pcol">Your destination is our command.<br>


			</p>
		</div>
		<div class="col-md-3 resturants">
			<i class="rest"> </i>
			<h4> Payment</h4>
			<p>Online Payment (Credit Card)<br>
				Cash on Hand</p>
		</div>
		<div class="col-md-3 beech">
			<i class="beec"> </i>
			<h4>Bus</h4>
			<p> Perhaps you require a shuttle bus or school bus to take people around? Travel Lite is proud to now offer bus rentals!</p>
		</div>
		<div class="col-md-3 cars">
			<i class="ca"> </i>
			<h4>car</h4>
			<p>Want a private trip? Rent one of our cars.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- hand -->

<!-- midban-->
<div class="vero">
	<div class="container">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="vero-top">
							<div class="col-md-4 vero-1">
								<p>""The Services are so fast and reliable"</p>
								<label> </label>
								<h6>-Lebron James</h6>

							</div>
							<div class="col-md-4 vero-2">
								<p>"This Website is a lifesaver!"</p>
								<label> </label>
								<h6>-Pablo Escobar</h6>

							</div>
							<div class="col-md-4 vero-3">
								<p>"Team Mapya Rocks!"</p>
								<label> </label>
								<h6>-Marlou</h6>

		</section>
		<!-- FlexSlider -->
		<script defer src="<?php echo base_url(); ?>assests/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(function(){
				SyntaxHighlighter.all();
			});
			$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- FlexSlider -->

	</div>
</div>
<!-- midban-->