<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['subject'];
    


    $email_from = 'janvav20@gmail.com';

    $email_subject = "New Form Submission";
    
    $email_body =   "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Phone: $phone.\n";
                


    $to = "janvav20@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>