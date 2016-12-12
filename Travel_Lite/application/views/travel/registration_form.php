

<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
  #main {display: block;
 margin: auto;    
    height:-1px;
    width: 0%;
}
 #logo {
    float:left;
    clear:both;
 }    
 body {
   background: rgba(226,242,248,1);
background: -moz-linear-gradient(top, rgba(226,242,248,1) 0%, rgba(82,198,234,1) 81%, rgba(73,195,233,1) 86%, rgba(235,246,250,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(226,242,248,1)), color-stop(81%, rgba(82,198,234,1)), color-stop(86%, rgba(73,195,233,1)), color-stop(100%, rgba(235,246,250,1)));
background: -webkit-linear-gradient(top, rgba(226,242,248,1) 0%, rgba(82,198,234,1) 81%, rgba(73,195,233,1) 86%, rgba(235,246,250,1) 100%);
background: -o-linear-gradient(top, rgba(226,242,248,1) 0%, rgba(82,198,234,1) 81%, rgba(73,195,233,1) 86%, rgba(235,246,250,1) 100%);
background: -ms-linear-gradient(top, rgba(226,242,248,1) 0%, rgba(82,198,234,1) 81%, rgba(73,195,233,1) 86%, rgba(235,246,250,1) 100%);
background: linear-gradient(to bottom, rgba(226,242,248,1) 0%, rgba(82,198,234,1) 81%, rgba(73,195,233,1) 86%, rgba(235,246,250,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2f2f8', endColorstr='#ebf6fa', GradientType=0 );
overflow: hidden;
 }
 #h5{
    color:black;
 }

</style>

<div id="logo">
    <a href=""><img src="http://localhost/Travel_Lite/assests/images/lite.png"  height="500" width="550"  /></a>

</div>
<div id="main">
    <div id="login">
        <h2>Registration Form</h2>
        <hr/>
        <?php
        $this->load->helper('form');
        echo form_open('index.php/user_authentication/new_user_registration');
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_label('Create Username : ');
        echo"<br/>";
        echo form_input('username');
        echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo $message_display;
        }
        echo "</div>";
        echo"<br/>";
        echo form_label('Email : ');
        echo"<br/>";
        $data = array(
            'type' => 'email',
            'name' => 'email_value'
        );
        echo form_input($data);
        echo"<br/>"; 
        echo"<br/>";
        echo form_label('Password : ');
        echo"<br/>";
        echo form_password('password');
        echo"<br/>";
        echo"<br/>";
        echo form_submit('submit', 'Sign Up');
        echo form_close();
        ?>
        <h5>Already have an account? <a href="http://localhost/Travel_Lite/index.php/user_authentication/user_login_process" style="color:blue;">Login</a></h5>
    </div>
</div>

</body>
</html>