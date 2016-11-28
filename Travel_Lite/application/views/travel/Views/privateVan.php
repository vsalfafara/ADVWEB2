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
      <form action="">

      <!--Departure-->
       <div class="form-group">
          <label class="control-label">From: </label>
           <select name="departing"  maxlength="50" required="required" class="form-control" required>
            <option value="default" disabled selected>Departing From</option>
            <option value="manila">Manila</option>
            <option value="lucena">Lucena</option>
            <option value="ilocos">Ilocos</option>
            <option value="pampanga">Pampanga</option>
          </select>
       </div>

          <!--Arrival-->
         <div class="form-group">
         <label class="control-label">To: </label>
          <select name="arriving"  maxlength="50" required="required" class="form-control" required>
            <option value="default" disabled selected>Arriving At</option>
            <option value="manila">Manila</option>
            <option value="lucena">Lucena</option>
            <option value="ilocos">Ilocos</option>
            <option value="pampanga">Pampanga</option>
          </select>
         </div>

        <!--Time-->
        <div class="form-group">
         <label class="control-label">Time: </label>
          <select name="time"  maxlength="50" required="required" class="form-control" required>
            <option value="default" disabled selected >Time</option>
            <option value="8AM" >8:00AM</option>
            <option value="1030AM" >10:30AM</option>
            <option value="1PM">1:00PM</option>
            <option value="3PM">3:00PM</option>
          </select>
        </div>

        <!--Journey Type-->
        <div class="form-group">
         <label class="control-label">Ticket: </label>
          <select name="journey"  maxlength="50" required="required" class="form-control" required>
            <option value="default" disabled selected >Journey Type: </option>
            <option value="oneway" >One Way</option>
            <option value="roundtrip" >Round Trip</option>
          </select>
        </div>

        <!--Quantity-->
         <div class="form-group">
          <label class="control-label">Quantity: </label>
           <select name="quantity"  maxlength="50" required="required" class="form-control">
            <option value="default" disabled selected>Quantity</option>
            <option value="6-9seaters" >6-9 Seaters</option>
            <option value="10-14seaters" >10-14 Seaters</option>
            <option value="15-18seaters" >15-18 Seaters</option>
            <option value="19-22seaters" >19-22 Seaters</option>             
           </select> 

           <!--Payment-->
        <div class="form-group">
         <label class="control-label">Payment:  </label>
          <input type="checkbox" name="payment" value="Cash"> Cash </br>
          <input type="checkbox" name="payment" value="Card"> Card </br>
        </div>
        
        <!--Card-->
        <div>
         <fieldset>
            <legend>Credit Card</legend>
            Card Number: <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus /><br>
            Expiration:  <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"autocomplete="cc-exp" required/><br>
            CV Code: <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required/></br>
            Coupon Code: <input type="text" class="form-control" name="couponCode" />
           </fieldset>
        </div>
              
             
            </form>
              <form action="<?php echo base_url('index.php/receipt/view');?>">
              <button class="btn btn-primary nextBtn btn-lg pull-right"> Next </button
              >
              </form>

</div>
