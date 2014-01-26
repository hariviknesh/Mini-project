<?php
session_start();
require_once "connect.php";

$bookname=$_SESSION['bookname'];
$deadline=$_SESSION['deadline'];
$adno=$_SESSION['adno'];


$sql = "select * from user where adno != '$adno'";
$result = mysql_query($sql) or die ( mysql_error() );

while ($line = mysql_fetch_assoc($result)) {
	


$to       = $line['email'];
$subject  = 'notification';
$message  = $bookname.' has arrived in bookbay and deadline is'.$deadline;
$headers  = 'From: sender@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))

{
	
	 
	 header("Location: success.php"); // This is wherever you want to redirect the user to
}
 else {
	 
	 header("Location: notify.php"); // Wherever you want the user to go when they fail the login
}
}


?>