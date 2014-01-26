<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register | Book Bay</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  


</head>
<body>


	<?php
// Create connection
$con=mysqli_connect("localhost","root","","mini");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else {
 	echo "Successfull";
 }
?>
<!-- on getting the POST values store them to variables and	call the TEST FUNCTION -->
	<?php 
		//clear the variables
		$nameErr= $idErr= $emailErr= $passwordErr= "";
		$name= $id= $email= $password= "";

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{   
			$valid= true;

			//if the field is empty, set the error message . Else send the variable to test_input function for processing.
			if(empty($_POST["name"]))
				{$nameErr= "Name is required";
					$valid= false;	}
			else
			{$name= test_input($_POST["name"]);
				// check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$name))
			      {
			      $nameErr = "Only letters and white space allowed"; 
			      $valid= false;
			      }
			 }
			if(empty($_POST["adno"]))
				{$idErr= "Register number is required";
				  $valid= false;	}
			else
			{$id= test_input($_POST["adno"]);	
			 if (!preg_match("/^[0-9]*$/",$id))
		      {
		      $idErr = "Only numbers are allowed"; 
		      $valid= false;
		      }
    }
			if(empty($_POST["email"]))
				{$emailErr= "Email is required";
				  $valid= false;	}
			else
			{$email= test_input($_POST["email"]);
					// check if e-mail address syntax is valid
				    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
				      {
				      $emailErr = "Invalid email format"; 
				      $valid= false;
				      }

			 }
			if(empty($_POST["password"]))
				{$passwordErr= "Password is required";
				  $valid= false;	}
			elseif ($_POST["password"]!=$_POST["password2"] ){
				$passwordErr= "Passwords don't Match";
				$valid= false;
			}
			else
			{$password= test_input($_POST["password"]); }

			if ($valid) {

				// Insert into database: User Table

				$sql= "INSERT INTO user (adno, Name, Password, Email)
						VALUES
						('$_POST[adno]', '$_POST[name]', '$_POST[password]', '$_POST[email]')";
							if (!mysqli_query($con,$sql))
						  {
						  die('Error: ' . mysqli_error($con));
						  }

			header('Location:register.php');
			exit();
			
		}

}

		//test function
		function test_input($data)
		{
			$data= trim($data);
			$data= stripslashes($data);
			$data= htmlspecialchars($data);
			return $data;	
		}
	 
		
	 ?>

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
			
				<h1>Register to Book Bay</h1>
				<h5>Enter your details below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<!-- <a href="#" id="company-branding" class="fr"><img src="images/company-logo.png" alt="Blue Hosting" /></a> -->
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="full-name">FULL NAME</label>
					<input type="text" name="name" id="full-name" class="round full-width-input" value="<?php echo $name;?>" autofocus><span> <?php echo $nameErr;?> </span>
				</p>
				<p>
					<label for="register-no">REGISTER NUMBER</label>
					<input type="int" name="adno" id="register-no" class="round full-width-input height-adjust" value="<?php echo $id;?>"> <span> <?php echo $idErr;?> </span>
				</p>
				<p>
					<label for="email">EMAIL</label>
					<input type="text" name="email" id="email" class="round full-width-input" value="<?php echo $email;?>"> <span> <?php echo $emailErr;?> </span>
				</p>
				<p>
					<label for="login-password">password</label>
					<input type="password" name="password" id="login-password" class="round full-width-input">
				</p>
				<p>
					<label for="login-password">confirm password</label>
					<input type="password" name="password2" id="login-password" class="round full-width-input"> <span> <?php echo $passwordErr;?> </span>
				</p>

			</fieldset>
			<input class="button round blue image-right ic-right-arrow" type="submit">
			<br/><br/><div class="information-box round">If you already have an account , return to the Home and Log In.	</div>

		</form>
		
	</div> <!-- end content -->
	
	
	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2013 <a href="#">Crown Inc</a>. All rights reserved.</p>
	
	</div> <!-- end footer -->

</body>
</html>