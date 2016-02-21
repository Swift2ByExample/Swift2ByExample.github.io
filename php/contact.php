<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
{
	//send email
	$firstname= $_REQUEST['firstname'] ;
	$lastname= $_REQUEST['lastname'] ;
	$email = $_REQUEST['email'] ;
	$booklist = $_REQUEST['booklist'];
	$message = $_REQUEST['message'] ;
	$subject = "New Message From Your Contact Form";
	$content = " Name: " . $firstname . " " . $lastname . "\r\n Book Name: " . $booklist . "\r\n Questions?:" . $message;
	mail("YOUR_EMAIL_ADDRESS_HERE",$subject,$content,  "From:" . $email);
	echo "Message Sent Successfully";
}
?>