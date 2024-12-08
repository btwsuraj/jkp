<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subect'];
$message= $_POST['message'];
// web name daldena hai yaha pe
$email_form = 'info@jkpestates.vercel.app';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $message.\n";

$to = 'jkpestates@gmail.com';

$headers = "From:$email_form \r\n ";

$headers .= "Reply to: $visitor_email \r\n ";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>
