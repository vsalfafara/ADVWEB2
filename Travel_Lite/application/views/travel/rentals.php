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

<!-- vehicle -->

<div class="container">
 <div class="row">
  <div class="col-lg-6">
      <!--BUS-->
      <div>
      <center><h4>BUS</h4><center><br>
        <img src="<?php echo base_url(); ?>assests/images/bus.png" style="height:200px; width:400px;"/><br/>

		</div>

		<form action="<?php echo base_url('index.php/privateBus/view');?>">
			<button class="btn btn-default" type="button" style="display: none;"> Private </button>

		</form>

		<form action="<?php echo base_url('index.php/privateBus/view');?>">
			 <input type="submit" class="btn private btn-1b" name="submit" value="PrivateBus"/>
		</form>

		<form action="<?php echo base_url('index.php/publicBus/view');?>">
			 <input type="submit" class="btn private btn-1b " name="submit" value="PublicBus"/>
		</form>

      <!--VAN-->


    </div>
          <div class="col-lg-6">
    <center><h4>VAN</h4><center><br>
        <img src="<?php echo base_url(); ?>assests/images/van.png" style="height:200px; width:350px;"/><br/>

		<form action="<?php echo base_url('index.php/privateVan/view');?>">
			<button class="btn private btn-1b"> Private </button>
		</form>
      </div>
 </div>
    </div>



