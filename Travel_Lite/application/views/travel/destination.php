<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
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
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/Vigan1.jpg" alt="...">

                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/anguib4.jpg" alt="...">

                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/apo3.jpg" alt="...">

                  </div>
                  <div class="item">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assests/Gallery/bulusan3.jpg" alt="...">

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
      <style>
        p {
          font-family: 'Catamaran', sans-serif;
          font size="10";
        }
        h4{
          font-family: 'Nunito', sans-serif;
        }
      </style>
          <!-- Modals -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Batangas Road Trip</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg" width="250" height="200">
               </div>
         <div class="col-lg-3">
         <br>
         <br>
         <br>
         <p>  Have the idea of a fun filled roadtrip? Visit Batangas now and you will want to come back after. If you ever want to go tubing, mountain climbing, or just chill under a waterfall, Batangas is best the stop for your next travel.</p>
         </div>
          </div>
        </div>
        <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   

           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>

    </div>
  </div>
</div>
  <!-- Modal2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Baler, Aurora</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pandin1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">
        <br>
         <br>
         <p>Dubbed as the “birthplace of surfing in the Philippines”, Baler is considered as a traveler’s paradise in the province of Aurora. The city is rich in history, has great food, adventurous activities and interesting attractions that you will surely enjoy. </p>
         </div>
          </div>
        </div>
            <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal3 -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pangasinan</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <br>
         <medium>When you have the sudden idea of “Hundread Islands” or “bangus”, then you might be planning Pangasinan as your next road trip or travel. Pangasinan, being the third largest province in the Philippines, has a lot to offer on your next travel.</medium>
         </div>
          </div>
        </div>
            <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">San Antonio Zambales</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>If you want to go beach hopping, camping, or fishing, San Antonio Zambales is the right place for you. Since the cataclysmic eruption of nearby Mt. Pinatubo in 1991, the rocky coastline of San Antonio has undergone a metamorphosis. It is now blanketed with thick volcanic ash that created white beaches, something many tourists are wildly attracted to. Agoho trees, a type of casuarina, have grown inland, fostering an irresistible charm. </p>
         </div>
          </div>
        </div>
             <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal5 -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tagaytay</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>Being an attraction to both foreign and local tourist thanks to the fun activities and beautiful climate, Tagaytay is one hell of place that you should add to you checklist of “Places I have to visit”. Being known as the home of the Taal Volcano, it’s one of the best reason why Tagaytay is a great destination.</p>
         </div>
          </div>
        </div>
            <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal6 -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">LA union</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>Wanna go to one of the top surfing spots in the Philippines? La Union is the right destination for you! But other than surfing, La Union still has a lot in store for you, from visiting the La Union Culture and Arts Gallery, to trekking the Tangadan Falls, La Union will make sure you’re satisfied with you travel.</p>
         </div>
          </div>
        </div>
             <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal7 -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Baguio City</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>Famous for its chilling climate, Baguio would be the coolest destination you would go to.  Go see the amazing mountain forest, or taste a delicious raw strawberry, the magic of Baguio’s atmosphere is one the main reasons why Baguio is included in Philippines’ most visited places.</p>
         </div>
          </div>
        </div>
             <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal8 -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ilocos</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>Being one of the most historic places in the Philippines, Ilocos is one of the greatest destinations for you. The famous Bangui Windmills, Paoay Church, the momentous streets of Vigan and one of the best beaches in the Philippines – Pagudpud, Ilocos will not let you down on your next travel.</p>
         </div>
          </div>
        </div>
             <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal9 -->
  <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kalinga</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">

         <br>
         <p>Got any plans for sightseeing? The scenery in Kalinga is probably the best anywhere in the Philippines, with gargantuan mountains crushing up against one another and ancient rice terraces that remain cultivated to this day flowing down their sides.</p>
         </div>
          </div>
        </div>
             <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal10 -->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SAGADA, MOUNTAIN PROVINCE</h4>
        </div>

        <div class="modal-body">
     <div class="container col-ld-12">
       <div class="row">
          <div class="col-md-3">
          <p></p>
           <img id="myImg" src="<?php echo base_url(); ?>assests/Gallery/pagsanjan1.jpg" alt="Trolltunga, Norway" width="250" height="200">
               </div>
         <div class="col-lg-3">
         <br>

         <p>Remember the Hanging Coffins in Philippines history? Then I guess you want to travel to Sagada, Mountain Province. Well not just only the Hanging Coffins, but there are still a lot of amazing places to visit in Sagada like the Sumaguing Cave, or the Lumiang Burial Cave, Sagada will help you enjoy your road trip.</p>
         </div>
          </div>
        </div>
            <div class="modal-footer row">
         <div class="col-xs-2">
            <button type="button" class="btn btn-default" data-dismiss="modal">Book/Reserve</button>
         </div>    

          <div class="col-lg-6">
            <h3 style=" font-family: 'Noto Sans', sans-serif;">$99.99 only</h3>
          </div>   
          
           <div class="col-lg-4">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>      
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
                                  <h3 data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal" ><center>This Week's Top 10</center></h3>
                                    <ul class="list list-pad">

                                        <li class="list-bg"><span>1.</span><a data-toggle="modal" href="#myModal">BATANGAS ROAD TRIP</a></li>

                                        <li class="list-bg1"><span>2.</span><a data-toggle="modal" href="#myModal2">BALER, AURORA</a></li>

                                        <li class="list-bg"><span>3.</span><a data-toggle="modal" href="#myModal3">PANGASINAN</a></li>

                                        <li class="list-bg1"><span>4.</span><a data-toggle="modal" href="#myModal4">SAN ANTONIO, ZAMBALES</a></li>

                                        <li class="list-bg"><span>5.</span><a data-toggle="modal" href="#myModal5">TAGAYTAY CITY</a></li>

                                        <li class="list-bg1"><span>6.</span><a data-toggle="modal" href="#myModal6"> LA UNION</a></li>

                                        <li class="list-bg"><span>7.</span><a data-toggle="modal" href="#myModal7">BAGUIO CITY</a></li>

                                        <li class="list-bg1"><span>8.</span><a data-toggle="modal" href="#myModal8">ILOCOS</a></li>

                                        <li class="list-bg"><span>9.</span><a data-toggle="modal" href="#myModal9">KALINGA</a></li>

                                        <li class="list-bg1"><span>10.</span><a data-toggle="modal" href="#myModal10"> SAGADA, MOUNTAIN PROVINCE</a></li>
                                    </ul>

           </div>

    <div class="col-md-8  desti-middle">
               <h3><center>Gallery</center></h3>
                  <div class="row img-thumbnails">
                <div class="col-md-6">
                    <a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">
                          <img src="<?php echo base_url(); ?>assests/Gallery/Mayon1.jpg" class="img-thumbnail" width="1000"   />
                    </a>
                </div>
                <div class="col-md-6">
                    <a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">
                         <img src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg"  class="img-thumbnail"   />
                    </a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">
                          <img src="<?php echo base_url(); ?>assests/Gallery/vigan1.jpg" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">
                          <img src="<?php echo base_url(); ?>assests/Gallery/puerto2.jpg"  class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-keyboard="true" data-target=".firstModal" href="#myModal">
                        <img src="<?php echo base_url(); ?>assests/Gallery/apo1.jpg" class="img-thumbnail">
                    </a>
                </div>
          </div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
   </div>
   </div>
</div>
</div>
