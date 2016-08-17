<?php

    // Here we get all the information from the fields sent over by the form.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'bmpinst@aol.com';
    $subject = 'BMPINST.IR : '.$name.' -- '.$email;
    $message = "An email was sent from BMPINST.IR\n".'FROM: '.$name."\nEMAIL: ".$email."\nMESSAGE: ".$message;
    $headers = 'From: contact@bmpinst.ir' . "\r\n";

     // this line checks that we have a valid email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //This method sends the mail.
        mail($to, $subject, $message, $headers);
        // success message
        echo "Your email was sent!";
    }else{
        echo "Invalid Email, please provide a correct email.";
    }

?>