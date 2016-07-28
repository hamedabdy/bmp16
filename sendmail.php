<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'bmpinst@aol.com';
$subject = 'BMPINST.IR : '.$name.' -- '.$email;
$message = "An email was sent from BMPINST.IR\n".'FROM: '.$name."\nEMAIL: ".$email."\nMESSAGE: ".$message;
$headers = 'From: contact@bmpinst.ir' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email, please provide a correct email.";
}

?>