<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="From: $name WEB Form Message \n Email: $email \n\n Message: $message";
$recipient = "anthony.cuevas1@upr.edu";
$mailheader = "From: $email \r\n";
mail($recipient,$mailheader,$content, $mailheader) or die("Error!");
header('location: Contactus.html');
exit;
?>