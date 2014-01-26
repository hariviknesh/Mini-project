<?php
session_start();
require_once "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sell Your Books | BookBay</title>
<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="welcome.php" class="round button home dark">Home</a>
			<a href="logout.php" class="round button home dark right">Logout</a>

			


		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="home-intro"class="fl">
			
				<h1><?php echo $_SESSION["name"];?></h1>
				<h2></h2>
			
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<!-- <a href="#" id="company-branding" class="fr"><img src="images/company-logo.png" alt="Blue Hosting" /></a> -->
			
		</div> <!-- end full-width -->	

	</div> 


		<div id="content" style="text-align:center">

			
				<a href="sell.php" class="button round blue image-right ic-right-arrow home-login">SELL</a>
	
				<br><br><p id="home-or">OR</p>

			<a href="buy.php" class="button round blue image-right ic-right-arrow home-signup">BUY</a>


	</div>



	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Cec Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->
</body>
</html>