<?php
 $this->load->helper('url');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Travel Lite</title>
<!--CSS-->
<link href="<?php echo base_url(); ?>assests/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assests/css/vehicle.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Costamar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<!--Scripts-->
<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar()
	{ 
		window.scrollTo(0,1); 
	}
</script>

<script src="<?php echo base_url(); ?>assests/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>