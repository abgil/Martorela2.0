<?php
	header('Content-type: application/json');
	
	$name = @trim(stripslashes($_POST['name']));
	$email = @trim(stripslashes($_POST['email']));
	$subject = @trim(stripslashes($_POST['subject']));
	$message = @trim(stripslashes($_POST['message']));
	$phone = @trim(stripslashes($_POST['phone']));
	
	$email_from = $email;
	$email_to = 'martorela@gmail.com';
	
	$body = 'Nombre: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telefono: ' . $phone . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message;
	
	$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
	
	die;
?>