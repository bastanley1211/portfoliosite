<?php
$name = $_POST['firstName'];
$email = $_POST['email'];
$select = $POST['subject'];
$formcontent="From: $name \n Message: $select";
$recipient = "bastanley1211@gmail.com";
$subject = "bastanley.dev contact form entry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! I'll get back to you as soon as I can.";
?>