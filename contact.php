<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'Vermount site';
$email_subject = 'Message from contact site';
$email_body = "Name: $name .\n".
              "email: $email.\n".
              "subject: $subject.\n".
              "message: $message.\n";

$to = "emailcontact";
$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $email \r\n";

mail($to,$email_subject,email_body,$headers);

header("location: index.html");
?>