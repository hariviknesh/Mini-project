<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Register as a BookBay Member</title>
<!--home button -->
	<h1> <a href="index.php">Book Bay</a></h1>
	<hr>
	<h2>REGISTER</h2>
</head>
<body>
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
			if(empty($_POST["id"]))
				{$idErr= "Id is required";
				  $valid= false;	}
			else
			{$id= test_input($_POST["id"]);	
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
			else
			{$password= test_input($_POST["password"]); }

			if ($valid) {
			header('Location:welcome.php');
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

<!--form with validation. On submitting the page sends the field values to itself -->
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<fieldset>

	    <p>Full Name: <input type="text" name="name" class="textbox" value="<?php echo $name;?>">  <span class="error"> <?php echo $nameErr;?></span></p>
		<p>Register No: <input type="text" name="id" class="textbox" value="<?php echo $id;?>">   <span class="error"> <?php echo $idErr;?></span></p>
		<p>Email: <input type="text" name="email" class="textbox" value="<?php echo $email;?>">		<span class="error"> <?php echo $emailErr;?></span></p>
		<p>Password: <input type="text" name="password" class="textbox" value="<?php echo $password;?>"> <span class="error"> <?php echo $passwordErr;?></span></p>
		</fieldset>
		<input type="submit">

	</form>

</body>
</html>