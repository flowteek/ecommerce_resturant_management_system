<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Ses Rayures Organic Restaurant</title>  
    <meta name="keywords" content="we sell organic foods and healthy food">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-ico">
    <link rel="apple-touch-icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" style="width:30%; display: flex;" href="index.php">
					<img src="images/logo.png" style="width:50%; border-radius: 25%; display: flex;" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div>

					<?php
					if(isset($_SESSION['uid']))
					{
					?>
					<span style="color:white; text-shadow:1px 2px 5px green;">HI <?php echo $_SESSION['uid']; ?></span> &nbsp;&nbsp; <span style="color: gold"><i class="fa fa-shopping-cart"></i>&nbsp;<a style="color: gold" href="cart.php">Cart</span></a>&nbsp;&nbsp; <a style="color: red" href="logout.php">LogOut</a>
					<?php	
					}
					else
					{	
					?>
					<a href="registration.php" style="color: white;">Sign up</a>&nbsp;&nbsp;&nbsp;<a href="login.php" style="color: white;">Login</a>
					<?php
					}
					?>	

					  </div>
				<div class="collapse navbar-collapse" id="navbars-rs-food" >
					<ul class="navbar-nav ml-auto" >
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="menu.php">Healthy Menu</a></li>
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="contact.php">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" style="color: white; text-shadow:1px 0px 1px gold;" href="review.php">Review</a></li>

						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li> -->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
						<!--<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
