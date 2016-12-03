<?php
$this->load->helper('url');
?>
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
  <div>
    <h3> Reservation </h3>

        <?php
            $this->load->helper('form');

            if (isset($error))
              echo $error;
            echo form_open('index.php/receipt/view_privateVan');
        ?>

      <!--Departure-->
       <div class="form-group">
        <label class="control-label">From: </label>
           <select name="vehicle"  maxlength="50" class="form-control" required>
            <option value="default" disabled selected>Bus</option>
            <?php foreach($vehicles as $vehicle) { ?>

              <option value="<?php echo $vehicle->vehicleid; ?>">
                <?php echo $vehicle->vehicle_name . ", " . $vehicle->vehicle_seaters . " Seats, " . $vehicle->plate_num;?>
              </option>

            <?php } ?>
          </select>
        </div>
       <div class="form-group">
        <label class="control-label">From: </label>
           <select name="departing"  maxlength="50" class="form-control" required>
            <option value="default" disabled selected>Departing From</option>
            <?php foreach($departure_data as $dep) { ?>

              <option value="<?php echo $dep->dep_name; ?>">
                <?php echo $dep->dep_name;?>
              </option>

            <?php } ?>
          </select>
        </div>
        <!--Arrival-->
        <div class="form-group">
          <label class="control-label">To: </label>
            <select name="arriving"  maxlength="50" class="form-control" required>
            <option value="default" disabled selected>Arrival From</option>
            <?php foreach($arrival_data as $arr) { ?>

              <option value="<?php echo $arr->arr_name; ?>">
                <?php echo $arr->arr_name;?>
              </option>

            <?php } ?>
            </select>
        </div>
        <!--Time-->
        <div class="form-group">
         <label class="control-label">Time: </label>
          <select name="time"  maxlength="50" class="form-control" required>
            <option value="default" disabled selected >Time</option>
            <?php foreach($departure_data as $dep) { ?>

              <option value="<?php echo $dep->time; ?>">
                <?php echo $dep->time;?>
              </option>

            <?php } ?>
          </select>
         </div>
         <!--Journey-->
        <div class="form-group">
         <label class="control-label">Journey Type:  </label>
          <select name="journey"  maxlength="50" class="form-control" required>
            <option value="default" disabled selected >Ticket </option>
            <option value="oneway" >One Way</option>
            <option value="roundtrip" >Round Trip</option>
          </select>
        </div>
         <!--Payment-->
        <div class="form-group">
          <label class="control-label">Payment: </label>

            <input type="submit" class="btn private btn-1b" name="submit" value="Cash"/><br />

            <input type="submit" class="btn private btn-1b" name="submit" value="Credit Card"/>
        </div>
             <!--Reservation-->
</div>
