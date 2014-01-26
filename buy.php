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
				

$sql = "select * from  item";
$result = mysql_query($sql) or die ( mysql_error() );


//grid design
	echo "<ul id='og-grid' class='og-grid'>";

while($row = mysql_fetch_assoc($result))
{
	$img=$row['image'];
	$book=$row['bookid'];
	$bname=$row['bookname'];
	$_SESSION['img']=$row['image'];
	$_SESSION['bookname']=$row['bookname'];
	$_SESSION['deadline']=$row['deadline'];
	$_SESSION['min']=$row['minbid'];
	$_SESSION['id']=$row['bookid'];



   echo"
   		<li>
 
        <div class='product_img'><a href='buyredir.php?id=$book'><img src=$img height=250 width=250 /></a></div>
            <div class='product_title'><a href=$img>$bname</a></div>

       </li>
        
     ";

    
}
echo "</ul>";


?>

</div>	



	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Cec Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->
</body>
</html>