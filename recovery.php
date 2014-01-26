<?php
session_start();
require_once "connect.php";

$count=0;

$email=$_POST['email'];
$sql = "select * from user where email = '$email'";
$result = mysql_query($sql) or die ( mysql_error() );

while ($line = mysql_fetch_assoc($result)) {
	 $count++;
	 $password=$line["password"];
	 $adno=$line["adno"];
}

if ($count == 1) {

$to       = $email;
$subject  = 'password recovery';
$message  = 'password:'.$password."\n".'register no:'.$adno;
$headers  = 'From: sender@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))

{
	
	 
	 header("Location: login.php"); // This is wherever you want to redirect the user to
}
 else {
	 
	 header("Location: servererror.php"); // Wherever you want the user to go when they fail the login
}
}
else
{
	 header("Location: noacc.php");
}

?>