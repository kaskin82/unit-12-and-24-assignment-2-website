<?php 
$name = $_POST["fname"]; 
$email = $_POST["email"]; 
$item = $_POST["order select"]
$message = $_POST["message"]; 
$formcontent="From: $name \n item ordered: $item \n Message: $message"; 
$recipient = "u00041882@nhc.ac.uk"; 
$subject = "Order Form"; 
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 
echo "Thank You, your message has been sent";
?>