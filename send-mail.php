<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Scrib Code';
    $email_subject = 'New Message From Scrib Code Contact';
    $email_body = "Firstname: $firstname.\n".
                  "Lastname: $lastname.\n".
                  "Email: $email.\n".
                  "Subject: $subject.\n".
                  "Message: $message.\n".;
    
    $to ="info@scribcode.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>