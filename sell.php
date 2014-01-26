
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sell | BookBay</title>
	<meta charset="utf-8">

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="script/jquery-ui.css">
    <script src="script/jquery-1.9.1.js"></script>
    <script src="script/jquery-ui.js"></script>
     <link rel="stylesheet" href="script/style.css">

 


</head>
<body>
	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">

		
			<a href="welcome.php" class="round button home dark">Home </a>
			<a href="logout.php" class="round button home dark right">Logout</a>


			<?php 

									// Create connection
					$con=mysqli_connect("localhost","root","","mini");

					// Check connection
				/*	if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }
					 else {
					 	echo "Successfull";
					 }
					// GRANT SELECT ON database.* TO 'user'@'localhost' IDENTIFIED BY 'password';


				session_start();
				echo "<b id='welcome-header'>WELCOME, </b>";
				$adno=$_SESSION['adno'];
				echo $adno;
				*/

			?>




<!-- on getting the POST values store them to variables and	call the TEST FUNCTION -->
	<?php 
		

		
	
		if($_SERVER["REQUEST_METHOD"]=="POST")


			{	

$dir="upload/";
		$_SESSION['bookname']=$_POST['bookname'];
		$_SESSION['deadline']=$_POST['deadline'];
	          
           
      /*    $sql= "INSERT INTO item (bookname, minbid, deadline, adno , image)
						VALUES
						('$_POST[bookname]', '$_POST[minbid]', '$_POST[deadline]','$_SESSION[adno]', '$loc')";
							if (!mysqli_query($con,$sql))
						  {
					  die('Error: ' . mysqli_error($con));
						  }

			
			header('Location:welcome.php');*/


		$file=	$_FILES["file"]["name"]; 
    
        $loc=$dir.$file;
        
        if(($_FILES["file"]["type"]=="image/gif") || ($_FILES["file"]["type"]=="image/jpeg") || ($_FILES["file"]["type"]=="image/pjpeg") || ($_FILES["file"]["type"]=="image/x-png"))
        {
        if($_FILES["file"]["error"] > 0)
            $str= "error code:" . $_FILES["file"]["error"]."<br>";
    else
    {
        
       
     
            move_uploaded_file($_FILES["file"]["tmp_name"],$loc);
           
            $sql= "INSERT INTO item (bookname, minbid, deadline, adno, image)
						VALUES
						('$_POST[bookname]', '$_POST[minbid]', '$_POST[deadline]','$_SESSION[adno]' ,'$loc')";
						if (!mysqli_query($con,$sql))
						  {
					  die('Error: ' . mysqli_error($con));
						  }
           
                      header('location:notify.php')  ;       
        }
    
        }
        else
        {
    
    header('location:index.php')  ; 
   
        }

        
        
        
}
			
          
            
        
	
		



		
	 ?>


		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->


		<div id="content">

			
		<div id="register_text1">Enter the details of the item to sell</div> <br>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="book-name">Name of the book </label>
					<input type="text" name="bookname" id="book-name" class="round full-width-input" autofocus required>
				</p>
				<p>
					<label for="minimum-bid">Minimum bid amount</label>
					<input type="text" name="minbid" id="minimum-bid" class="round full-width-input" required>
				</p>
				<p>
					<label for="datepicker">Deadline-date</label> 
					<input type="date" name="deadline" id="datepicker" class="round full-width-input+ height-adjust" required>
				</p>
				<p>
					<label for="uploadImage">Upload an image of the book</label>				
				

				<img id="uploadPreview" style="width: 100px; height: 100px;" />
				<input id="uploadImage" type="file" class="upload-font" name="file" onchange="PreviewImage();" />
				<script type="text/javascript">

				    function PreviewImage() {
				        var oFReader = new FileReader();
				        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

				        oFReader.onload = function (oFREvent) {
				            document.getElementById("uploadPreview").src = oFREvent.target.result;
				        };
				    };

				</script>
			</p>


			</fieldset>
			<input class="button round blue image-right ic-right-arrow" type="submit">
			<br/><br/><div class="information-box round"></div>

		</form>

	</div>	


	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Cec Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->
</body>
</html>