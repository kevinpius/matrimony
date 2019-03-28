<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Services :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Services</li>
     </ul>
   </div>
   <div class="services">
   	<div class="page_header">
   	 <h1>Services</h1>
   	 <h3>Miscellaneous works by You & Me...</h3>
   	 <p>The profit from the You & Me website is used up for various purposes.</p>
    </div>
    <div class="services_top">
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-heart-o icon_4"> </i>
    		<h4>Blood Bank Donation</h4>
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-lemon-o icon_4"> </i>
    		<h4>Farmer's Welfare and Related Fund </h4>
    		
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-thumbs-o-up icon_4"> </i>
    		<h4>Socio-Economic Benefit</h4>
        
    	</div>
    	<div class="clearfix"> </div>
    </div>	
    <div class="services_top1">
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-smile-o icon_4"> </i>
    		<h4>Happiness of Mankind</h4>
    		
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-wheelchair icon_4"> </i>
    		<h4>Healthcare</h4>
    		
    	</div>
    	<div class="col-sm-4 item_content">
    		<i class="fa fa-spinner icon_4"> </i>
    		<h4>Progress in Science and Tech</h4>
    		
    	</div>
    	<div class="clearfix"> </div>
    </div>	
   </div>
<?php include_once("footer.php");?>

</body>
</html>	
