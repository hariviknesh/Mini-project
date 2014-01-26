<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>password recovery</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">

	<!-- Optimize for mobile devices-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  -->
</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="index.php" class="round button home ic-left-arrow image-left dark">Book Bay</a>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Password recovery</h1>
				<h5>Enter your email address below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<!-- <a href="#" id="company-branding" class="fr"><img src="images/company-logo.png" alt="Blue Hosting" /></a> -->
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="recovery.php" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="login-username">Email.</label>
					<input type="text"  name="email" id="login-username" class="round full-width-input height-adjust" autofocus />
				</p>

		
				
				<input class="button round blue image-right ic-right-arrow" type="submit" value="SUBMIT"/>

			</fieldset>

			<br/>

		</form>
		
	</div> <!-- end content -->
	
	
	
	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Cec Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->

</body>
</html>