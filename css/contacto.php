<?php
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mensaje']) ){
	$name = $_POST['name'];  HINT: use preg_replace() to filter the data
	$email = $_POST['email'];
	$mensaje = nl2br($_POST['mensaje']);
	$to = "tlillocares@gmail.com";	
	$from = $email;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <p>'.$mensaje.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>