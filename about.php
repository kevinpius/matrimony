<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>You & Me | About ::
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
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
        <li class="current-page">About</li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/a33.png" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1></h1>
   	  	<p> </p>
   	  	<div class="accordation">
		   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title"> Purpose <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse in" style="height: auto;">
				<p>You & Me is a Matrimonial Website made using PHP, CSS, JAVA Script and My SQL. This is made as a DBMS Mini Project by Kevin Pius 1MJ16IS028 for the Academic Year 2018. This has been done as a part of the VTU Information Science BE Academic Curriculum. </p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
			<div class="jb-accordion-wrapper">
				<div class="jb-accordion-title"> Future Plans <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion2-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion2-" class="jb-accordion-content collapse " style="height: auto;">
				<p>The full fledged improvement of this website will be taken care of during the upcoming tenure of the BE course. Improvement on all aspects of You & Me will be focused on.</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
			<div class="jb-accordion-wrapper">
				<div class="jb-accordion-title"> Sources <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion3" class="jb-accordion-content collapse ">
				<p> Various codes have been referenced and downloaded from online websites such as Github, StackOverflow etc. Tutorials on YouTube has also been checked upon. My Sql from the DBMS subject of VTU 5th sem curriculum has been practically put into use. </p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
		</div>
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="about_middle">
	<div class="container">
	  <h2>Happy Clients</h2>
	  <div class="about_middle-grid1">
		<div class="col-sm-6 testi_grid list-item-0">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a11.png" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">Amazing Site! Thanks to this site for giving me my partner!!</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
		    <small class="testi-meta"><span class="user">Varun Viswanath </span></small>
		</div>
		<div class="col-sm-6 testi_grid list-item-1">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a22.png" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">Thanks to this site for giving me my partner!!</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
			<small class="testi-meta1"><span class="user">Monica Raj </span></small>
		</div>
		<div class="clearfix"> </div>
	  </div>
		</div>
		<div class="clearfix"> </div>
	  </div>
	</div>
</div>
			 </li>
	       </ul>
	   </div>
	   <div class="clearfix"> </div>
	</div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	
