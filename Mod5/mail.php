<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "email@here.com";
$subject = "subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! This
form is not currenly live, please contact us directly using the information
listed on out countact page");
echo "Thank You for contacting us, we will reach out in the next day or two!";
?>
