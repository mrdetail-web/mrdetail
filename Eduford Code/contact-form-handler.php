<?php
    $name = $_POST['username'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
 $sluzba = $_POST['sluzba'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $message = $_POST['password2'];


    $email_from = 'misterclean.detailing@gmail.com';

    $email_subject = "New Form Submission";
    
   $email_body =   "User Name: $name\n".
                    "User Email: $visitor_email\n".
                    "Phone: $phone\n".
                    "Sluzba: $sluzba\n".
                    "Date: $date\n".
                    "Time: $time\n".
                    "Message: $message\n";


    $to = "janvav20@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>