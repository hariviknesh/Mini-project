<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login | Book Bay</title>
	
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
			
				<h1>Login to Book Bay</h1>
				<h5>Enter your credentials below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<!-- <a href="#" id="company-branding" class="fr"><img src="images/company-logo.png" alt="Blue Hosting" /></a> -->
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="check.php" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="login-username">REGISTER NO.</label>
					<input type="int"  name="adno" id="login-username" class="round full-width-input height-adjust" autofocus />
				</p>

				<p>
					<label for="login-password">password</label>
					<input type="password" name="password" id="login-password" class="round full-width-input" />
				</p>
				
				<p>I've <a href="#">forgotten my password</a>.</p>
				
				<input class="button round blue image-right ic-right-arrow" type="submit" value="LOGIN"/>

			</fieldset>

			<br/><div class="information-box round">If you don't have an account , return to the Home and Register.	</div>

		</form>
		
	</div> <!-- end content -->
	
	
	
	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Crown Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->

</body>
</html>