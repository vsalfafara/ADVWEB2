<?php
$this->load->helper('url');
?>
  <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Official Receipt</h3>
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
                          <td class="pull-left"><strong>Customer #: </strong>64243890765122</td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Invoice #: </strong>5648</td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Date: </strong>8-18-2013</td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Period: </strong>7/1/2103 - 7/30/2013
                          </td>
                        </tr>
                          <td class="pull-left"><strong>Vehicle: </strong>Bus
                          </td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Type: </strong>Private
                          </td>
                        </tr>
                        <tr>
                          <td class="pull-left"><strong>Paid</strong></td>
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
                        <th>Time</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Manila</td>
                      <td>Lucena</td>
                      <td>8:30AM</td>
                      <td>10/8/2013</td>
                      <td>---</td>
                      <td>P3000.00</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>Total</strong></td>
                        <td><strong>P370.00</strong></td>
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
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                </button>
            </div>
        </div>
    </div>
    <!--End of Step 4-->
    <!--Step 5-->
  <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Thank you!</h3>
                <center><button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button></center>
            </div>
        </div>
    </div>
    <!--End of Step 5-->
</div>