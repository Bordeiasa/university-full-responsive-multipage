<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $visitor_email.\n";

$to = 'loculcuchestii@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$headers);
header("location: contact.html");
?>