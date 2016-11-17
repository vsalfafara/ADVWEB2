
<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
if (isset($message_display)) {
    echo "<div class='message'>";
    echo $message_display;
    echo "</div>";
}
?>
<style>
 #main {    display: block;
            margin: auto;  
            width: 0%;}
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
   
   </style>
<div id="logo">
<img src="http://localhost/Travel_Lite/assests/images/lite.png"  alt="" height="500" width="500"  />
</div>

<div id="main">
    <div id="login">
        <h2>Login Form</h2>
        <hr/>
        <?php
            $this->load->helper('form');
            echo form_open('index.php/user_authentication/user_login_process');
        ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
        ?>
        <label>UserName :</label>
        <input type="text" name="username" id="name" placeholder="username"/><br /><br />
        <label>Password :</label>
        <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
        <input type="submit" value=" Login " name="submit"/><br />

        <h5>Don't have an account? <a href="<?php echo base_url('travel-lite/index.php/user_authentication/new_user_registration');?>">Sign up</a></h5>
        <?php echo form_close(); ?>
        <a href="http://localhost/Travel_Lite/index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
    </div>
</div>
</body>
</html>