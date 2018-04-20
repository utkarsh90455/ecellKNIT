<?php
include_once('header.php');

if(isset($_POST['submit']))

{
@ $id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$year = $_POST['Year'];
$rollno = $_POST['rollno'];
$branch= $_POST['branch'];
if(mysql_query("INSERT INTO workshop (rollno,fname,lname,email,phone,year,branch) VALUES('$rollno','$fname','$lname','$email','$mobile','$year','$branch')")){
                 $confirm= "Registration Suceessful...! ";
				 
				 
						 
	}

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/a18.png" type="image/png"><title>E-Cell KNIT Sultanpur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

    	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]-->
	<script src="js/respond.min.js"></script>
	<!--[endif]-->

  
  
  </head>
  
  
  
  <body>
  
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
			  <div class="navbar-header">
				<a href="index.html"><img alt="Brand"  src="images/a18.png" height="70px" width="60px" /></a>
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					
					
				<a href="index.html"><img alt="Brand"  src="images/l.png"/></a>
					
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="#" data-nav-section="home" onClick="location.href='index.html'" style="display:inline-block " ><span>Home</span></a></li>
						<li><a href="#" data-nav-section="aboutus" onClick="location.href='index.html'" style="display:inline-block " ><span>About us</span></a></li>
					
						
						<li><a href="#" data-nav-section="explore" onClick="location.href='index.html'" style="display:inline-block "><span>Events</span></a></li>
						<li><a href="#" data-nav-section="team" onClick="location.href='index.html'" style="display:inline-block " ><span>Initiative</span></a></li>
						<li><a href="#" data-nav-section="blog" onClick="location.href='index.html'" style="display:inline-block" ><span>Blog</span></a></li>
							<li><a href="https://knit.almaconnect.com/" onClick="location.href='https://knit.almaconnect.com/'" style="display:inline-block"  >Alumni Connect</a></li>
						<li><a href="contact.html" onClick="location.href='contact.html'" style="display:inline-block"  >Contact</a></li>
						<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Register <b class="caret"></b
    </a>
    <ul class="dropdown-menu">
      <li style="text-align:center;"><a href="form.php"  onClick="location.href='form.php'"style="color:" ><span >Alumni Registration</span></a></li>
	  <li style="text-align:center;"><a href="form2.php"  onClick="location.href='form2.php'"style="color:" ><span>Student Registration</span></a></li>
    </ul>
  </li>

						
					</ul>
				</div>
			</nav>
	  </div>
	</header>
  
    <div class="container" style="text-align:center;">

     <p style="text-align:center;"><h3 style="color:red;margin-top:200px;">Registration Close for E-Symposium</h3></p>
<p style="text-align:center;"><a href="index.html"  onClick="location.href='index.html'"style="color:" ><button type="submit" name="submit" class="btn btn-warning" >Back</button></a></p>

        </div><!-- /.container -->

  
  
  
  
  
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<script src="js/mod.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  </body>
</html>