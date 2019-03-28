<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>You & Me | Home ::
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
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3> We Bring People Together.....</h3>
      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
    </div>
  </div>
 
</div> 
<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM customer";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$name=$row['firstname'] . " " . $row['lastname'];
        			$profileid=$row['cust_id'];
        			$age=$row['age'];
        			$place=$row['state'] . "," . $row['district'];
        			$job=$row['occupation'];

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
					echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
					echo "<div class=\"center-middle\">About {$name}</div>";
					echo "</div>";
					echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
					echo "</li>";
				
        		}
        	}

        ?>
          </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="grid_2">
	<div class="container">
		<h2>Success Stories</h2>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
	     <div class="col-md-8 suceess_story">
	         <ul> 
			   <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/a11.png" class="img-responsive" alt=""/>
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">Varun and Tanya </a></h4>				        	
				        	<p>Found my partner through this amazing site </p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/thaha.png" class="img-responsive" alt=""/>
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#"> Nick and Tiana </a></h4>
				        	<p>Thank you soo much kevin for making this site and helping us get together in life </a></p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/kith.png" class="img-responsive" alt=""/>
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">Ashraff & Sania </a></h4>
				        	<p>Best Site to find your partner.</p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/10.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#"> Rahul & Ashna </a></h4>
				        	<p> Went through various sites and finally got this site and realised this is the best!!</p>
				        </div>
				    </div>
				</li>
	            <li>
				
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/bekhh.png" class="img-responsive" alt=""/>
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#"> Victor and Ancy </a></h4>
             <p> This site gave me a life and a partner :) </p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2018</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/janda.png" class="img-responsive" alt=""/>
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">Jake and Amy </a></h4>
				        	<p> Hats off to Kevin and his team for making this amazing site!! </p>
				        </div>
				    </div>
				</li>
	        </ul>
	    </div>

</div>

</fieldset>
</form>
</div>

    </div>
    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>" The intention behind making YOU & ME was to help Indians find a perfect life partner. "</p>
        <p>This website has been made by Kevin Pius<p>
        <li><a href="https://www.instagram.com/kevinpius/">Kevin Pius</a></li>
            <div class="post-content"> Information Science student at MVJ College Of Engineering, Bangalore. An alumni of St Joseph's Pre University College and Baldwin Boys' , Bangalore. </div>



    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>

    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
                  <li><a href="http://www.facebook.com"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="https://twitter.com/hashtag/matrimony?lang=en"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="https://www.youtube.com/watch?v=UVPhdOBk2kM"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © The KevinPius Company 2018
</a> </p>
	        </div>
    	</div>
    </div>
</body>
</html>	
