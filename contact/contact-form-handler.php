<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $business_name = $_POST['business'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $message = $_POST['message'];
// Updated

    $email_from = 'janet@parakaleobookkeeping.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Business: $business_name.\n".
                            "User Phone: $phone.\n".
                                "User Time: $time.\n".
                                    "User Message: $message.\n";

    $to = "janet@parakaleobookkeeping.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>