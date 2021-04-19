<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $email_from = 'HealthandFitness@info.com';

    $email_subject = $subject;

    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message:\n $message.\n";
   
    $to = "healthandfitnessgr26@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");
?>