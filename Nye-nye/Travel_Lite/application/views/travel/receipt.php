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
  <!--Receipt-->
  <div>
  <h3> Receipt</h3>
                <!-- Start of OR -->
              <div class="container">
                <div class="row">
                  <div class="span4">
                  <img src="<?php echo base_url(); ?>assests/images/lite.png" style="height:170px; width: 150px; margin-bottom: -33px; margin-left: -30px; margin-top: -30px;" class="img-responsive" alt="" />
                    <address>
                        <strong>Travel Lite</strong><br>
                        P.O Box 3171<br>
                        Kent, WA 98089<br>
                    </address>
                  </div>
                  <div class="span4 well" style="margin-left: -50px;">
                    <table class="invoice-head">
                      <tbody>
                        <tr>
                          <td class="pull-left"><strong>Customer Username: </strong><?php echo $invoice->created_by;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Invoice #: </strong><?php echo $invoice->invoiceid;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Date: </strong><?php echo str_replace('-', '/',substr($invoice->date_created, 0, 10));?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Validity Period: </strong>
                          <?php
                            $date = date('m/d/Y');
                            echo $date . " - ";

                            $date = date_create($date);
                            date_add($date,date_interval_create_from_date_string("1 month"));
                            echo date_format($date,"m/d/Y");

                          ?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Vehicle: </strong><?php echo $invoice->vehicle_name;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Vehicle Type: </strong><?php echo $invoice->vehicle;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Plate Number: </strong><?php echo $invoice->plate_num;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Type: </strong><?php echo $invoice->vehicle_type;?></td>
                        </tr>
                         <tr>
                          <td class="pull-left"><strong>Payment: </strong><?php echo $invoice->payment_type;?></td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong><?php echo $invoice->paid;?></strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="span8">
                    <h2>Invoice</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="span8 well invoice-body">
                    <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Departure From</th>
                        <th>Arriving At</th>
                        <th>Ticket Type</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $invoice->departure;?></td>
                      <td><?php echo $invoice->arrival;?></td>
                      <td><?php echo $invoice->type;?></td>
                      <td><?php echo $invoice->time;?></td>
                      <td><?php echo $invoice->date;?></td>
                      <td><?php echo $invoice->quantity;?></td>
                      <td><?php echo "₱"; echo $invoice->cost;?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>Total</strong></td>
                        <td><strong><?php echo "₱"; echo $invoice->cost;?></strong></td>
                    </tr>
                    </tbody>
                  </table>
                  </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <strong>Phone:</strong> <a href="tel:555-555-5555">555-555-5555</a>
                    </div>
                    <div class="span3">
                        <strong>Email:</strong> <a href="travel-lite.co">travel-lite@gmail.com</a>
                    </div>
                    <div class="span3">
                        <strong>Website:</strong> <a href="####">http://travel-lite.com</a>
                    </div>
                </div>
              </div>
              <!--End of OR-->
              <form action="<?php echo base_url('');?>">
              <input type="submit"class="btn btn-success btn-lg pull-right" value="Finish
              "/>
              </form>
</div>
