<?php


session_start(); // Start a new session
$servername="localhost";
$username="root";
$conn=  mysql_connect($servername,$username)or die(mysql_error());
mysql_select_db("mini",$conn); 

// Get the data passed from the form
$adno = $_POST['adno'];
$password = $_POST['password'];

// Do some basic sanitizing
$adno = stripslashes($adno);
$password = stripslashes($password);

$sql = "select * from user where adno = '$adno' and password = '$password'";
$result = mysql_query($sql) or die ( mysql_error() );

$count = 0;

while ($line = mysql_fetch_assoc($result)) {
	 $count++;
}

if ($count == 1) {
	 $_SESSION['loggedIn'] = "true";
	 header("Location: welcome.php"); // This is wherever you want to redirect the user to
} else {
	 $_SESSION['loggedIn'] = "false";
	 header("Location: login.php"); // Wherever you want the user to go when they fail the login
}

?>