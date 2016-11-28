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
                                <li><a href="<?php $this->load->helper('url'); echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
                                <li><a href="<?php $this->load->helper('url'); echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
                                <li class="active"><a href="<?php $this->load->helper('url'); echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
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
       <div class="row">
      <!--Start First Column-->
      <div class="col-md-2 no-image"><!--Delete the no-image class from your code, all css in this example is merely to beautify the results on this page, and is not required for the modal carousels to work-->
          <!-- The size of your images determines the size of the modal, set them to whatever you like-->
      <!--Note the data-toggle and data-target name-->
             </div>
      <div class="modal fade firstModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
        <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
          <div class="modal-content">
            <div id="carousel-controls" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/Mayon1.jpg" alt="...">
                     <div class="carousel-caption">
                         insert a caption for your images here, if you want
                     </div>
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/Mayon2.jpg" alt="...">
                    
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/taal3.jpg" alt="...">
                   
                  </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-controls" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-controls" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
      </div>
       <div class="row">
      <!--Start First Column-->
      <div class="col-md-4 no-image"><!--Delete the no-image class from your code, all css in this example is merely to beautify the results on this page, and is not required for the modal carousels to work-->
          <!-- The size of your images determines the size of the modal, set them to whatever you like-->
      <!--Note the data-toggle and data-target name-->
             </div>
      <div class="modal fade secondModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
        <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
          <div class="modal-content">
            <div id="carousel-controls" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/Mayon1.jpg" alt="...">
                     <div class="carousel-caption">
                         insert a caption for your images here, if you want
                     </div>
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg" alt="...">
                    
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/taal3.jpg" alt="...">
                   
                  </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-controls" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-controls" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
      </div>

        
      
      
      <!--IMPORTANT: This should be a given, but just in case it helps: The number of modals you can fit in a row is limited by your column width. 
      The above example will only allow 3 modals per row because our column width is set to 4, 4+4+4=12 so... no more than 3, if you wanted 4 modals, 
      change the column width to 3, 3+3+3+3=12 (four modals!), Also this should be a given, but the included CSS is not manditory for any functionality, modals are
      javascript based and their funtionality is included in bootstrap, unless you specifically exclude them. The carousel works because of jQuery, which you should
      also already have-->
      
      
    </div> <!--End Row-->
                </div>
  </div>
<!-- header -->
<!-- destination -->    
<div class="destination">
 
    <div class="container-fluid">
  <!--
     <div class="desti">
        <h3>Destinations</h3>
        <img src="<?php echo base_url(); ?>assests/images/dest_banner.jpg" class="img-responsive" alt=""/>
    </div>
  //-->
    <div class="grids">
        <div class="box1">
           <div class="col-md-4 padding">
                                  <h3 ><center>This Week's Top 10</center></h3>
                                    <ul class="list list-pad">
                                        <li class="list-bg"><span>1.</span><a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">BATANGAS ROAD TRIP</a></li>

                                        <li class="list-bg1"><span>2.</span><a data-toggle="modal2" data-keyboard="true" data-target=".secondModal" href="#myModal">BALER, AURORA</a></li>

                                        <li class="list-bg"><span>3.</span><a data-toggle="modal" data-keyboard="true" data-target=".thirdModal" href="#myModal">PANGASINAN</a></li>

                                        <li class="list-bg1"><span>4.</span><a data-toggle="modal" data-keyboard="true" data-target=".forthModal" href="#myModal">SAN ANTONIO, ZAMBALES</a></li>

                                        <li class="list-bg"><span>5.</span><a data-toggle="modal" data-keyboard="true" data-target=".fifthModal" href="#myModal">TAGAYTAY CITY</a></li>

                                        <li class="list-bg1"><span>6.</span><a data-toggle="modal" data-keyboard="true" data-target=".sixthModal" href="#myModal"> LA UNION</a></li>

                                        <li class="list-bg"><span>7.</span><a data-toggle="modal" data-keyboard="true" data-target=".7Modal" href="#myModal">BAGUIO CITY</a></li>

                                        <li class="list-bg1"><span>8.</span><<a data-toggle="modal" data-keyboard="true" data-target=".8Modal" href="#myModal">ILOCOS</a></li>

                                        <li class="list-bg"><span>9.</span><a data-toggle="modal" data-keyboard="true" data-target=".9Modal" href="#myModal">KALINGA</a></li>

                                        <li class="list-bg1"><span>10.</span><a data-toggle="modal" data-keyboard="true" data-target=".10Modal" href="#myModal"> SAGADA, MOUNTAIN PROVINCE</a></li>
                                    </ul>
                                  
           </div>
                            
    <div class="col-md-8  desti-middle">           
               <h3><center>Gallery</center></h3>    
                  <div class="row img-thumbnails">
                <div class="col-md-6">
                    <a href="#">
                          <img src="<?php echo base_url(); ?>assests/Gallery/Mayon1.jpg" class="img-thumbnail" width="1000"   />
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                         <img src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg"  class="img-thumbnail"   />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                          <img src="<?php echo base_url(); ?>assests/Gallery/vigan1.jpg" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                          <img src="<?php echo base_url(); ?>assests/Gallery/puerto2.jpg"  class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg" class="img-thumbnail">
                    </a>
                </div>            
          </div>                                           
      <div class="clearfix"> </div>
    </div>  
    <div class="clearfix"> </div>
   </div> </div>
</div>
