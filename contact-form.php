<?php
    $name =$_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'georgesayles@gmail.com';

    $email_subject = "new message from website"

    $email_body = "Name: $name.\n".
                    "email: $visitor_email.\n".
                        "message: $message .\n";


    $to = "georgesayles@gmail.com";
    $headers = "form: $email_from \r\n";
    $headers .= "reply to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers)
    header("location: index.html");
