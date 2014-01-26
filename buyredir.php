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


		<div id='content' style='text-align:center'>
			
				<?php

				$book=$_GET['id'];

				$sql = "select * from  item where bookid='$book'";
				$result = mysql_query($sql) or die ( mysql_error() );    

				while ($line=mysql_fetch_assoc($result)) {
					
					$img=$line['image'];
					$bname=$line['bookname'];
					$bid=$line['minbid'];
					$dead=$line['deadline'];

					echo "<img src=$img height=250 width=250>";
					echo"<h1 style='font-size:30px'>$bname</h1>";
				?>
					<?php
					echo"<h1>Minimum Bid: ₹ $bid</h1>";
					echo "<h2 id='old_dead'>Initial Bid :</h2>";
					echo"<h2>Deadline: $dead</h2>";
					echo"
					<form action='placebid.php' method='POST' id='login-form'>
		

					<p>
					<label for='login-username'></label>
					<input type='int'  name='minbid' id='login-username' class='round width-adjust height-adjust' placeholder='Enter the bid amount' autofocus />
				</p>

				<input class='button round blue ic-right-arrow image-left' type='submit' value='BID'/>
			

		</form>	";
					

				}


			?>

		</div>	



	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Cec Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->
</body>
</html>