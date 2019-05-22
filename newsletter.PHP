<?php 
$email = $_POST["email"]; 
$formcontent="$email , signed up for the newsletter"; 
$recipient = "u00041882@nhc.ac.uk"; 
$subject = "Newsletter"; 
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 
echo "Thank You, your message has been sent";
?>