<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
<head>
    <title>Membership</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/bootstrap.css">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>


<body>
<div class="container">

    <div class="row">
        <div class ="col-lg-6">
        <img src="http://localhost/Travel_Lite/assests/images/lite.png" class="img-responsive"  height="500" width="500"  />
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="col-lg-6">  
                <div class="col-lg-12">           
                        <h2>Membership</h2>
                        <p><strong>Username: </strong> <?php echo $username; ?> </p>
                        <p><strong>Email : </strong> <?php echo $email; ?> </p>
                        <br>                     
                </div>  
                         <div class="row">
                        <div class="col-lg-6">                           

                                 <select name="invoice"  maxlength="50" class="form-control" required>
                                    <option value="default" disabled selected>
                                        <?php
                                        if ($this->session->userdata['logged_in']['type'] == 1)
                                            echo "Your Receipt";
                                        else
                                            echo "Customer Receipts";
                                        ?>
                                    </option>
                                <?php
                                    foreach ($invoices as $invoice)
                                    {
                                ?>
                                    <option value="<?php echo $invoice->invoiceid; ?>">
                                    <?php 
                                        echo $invoice->invoiceid . ": ";
                                        echo $invoice->departure . " - " . $invoice->arrival;
                                    ?>
                                    </option>

                                <?php 
                                    } 
                                ?>
                           </select>
                         </div>
                             <div class="col-lg-4">
                                <input type="submit" name="submit" value="Get Receipt"/>
                       
        
                              </div>  
                  </div>          
               
                    <div class="col-lg-4">                                
                       <a href="http://localhost/Travel_Lite/index.php" class="btn btn-info btn-lg">
                              <span class="glyphicon "></span> Home
                       </a>
                    </div>
                    <div class="col-lg-4 ">                                    
                        <a href="http://localhost/Travel_Lite/index.php/user_authentication/logout" class="btn btn-info btn-lg">
                          <span class="glyphicon "></span> Logout
                        </a>
                    </div>   
                       
             </div>
    </div>               
</div>      

<?php
    $this->load->helper('form');

    if (isset($error))
        echo $error;
    echo form_open('index.php/invoice/get');
?>

    


</body>
</html>