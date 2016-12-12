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


<!-- credit -->
	<div>
	<fieldset>
	<legend>Credit Card</legend>
        Card Number: <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus /><br>
        Expiration:  <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"autocomplete="cc-exp" required/><br>
        CV Code: <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required/></br>
        Coupon Code: <input type="text" class="form-control" name="couponCode" />
       </fieldset>
	</div>

              <form action="<?php echo base_url('index.php/receipt/creditView');?>">
                <input type="submit" class="btn btn-primary nextBtn btn-lg pull-right" value="Next"/>
              </form>

<!-- credit -->