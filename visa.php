<?php

    // Here we get all the information from the fields sent over by the form.
    $email = $_POST['email'];

    $to = 'bmpinst@aol.com';
    $subject = 'BMPINST.IR : VISA FORM APPLICATION';
    $message = "ONLINE FORM APPLICATION : \n\n"
                . "First Name : " . $_POST['firstname'] . "\n"
                . "Last Name : " . $_POST['lastname'] . "\n"
                . "Gender : " . $_POST['gender'] . "\n"
                . "Date of birth : " . $_POST['birthday'] . "\n"
                . "Place of birth : " . $_POST['birthplace'] . "\n"

                . "Father's name : " . $_POST['fathersName'] . "\n"
                . "Marital status : " . $_POST['marital'] . "\n"
                . "Nationality : " . $_POST['nationality'] . "\n"
                . "Former nationality : " . $_POST['formerNationality'] . "\n"
                . "Passport number : " . $_POST['passportNumber'] . "\n"
                . "Date of issue : " . $_POST['issueDate'] . "\n"
                . "Date of expiry : " . $_POST['expiryDate'] . "\n"
                . "Place of issue : " . $_POST['issuePlace'] . "\n"
                . "Organization name & address : " . $_POST['orgNameAddress'] . "\n"
                . "Occupation : " . $_POST['occupation'] . "\n"
                . "Title / Rank : " . $_POST['titleRank'] . "\n"
                . "Tel : " . $_POST['tel'] . "\n"
                . "Fax : " . $_POST['fax'] . "\n"
                . "E-mail : " . $_POST['email'] . "\n"
                . "Purpose of the trip : " . $_POST['tripPurpose'] . "\n"
                . "Duration of stay in Iran : Days : " . $_POST['durationDays'] .' Months : '. $_POST['durationMonths'] . "\n"
                . "Date of last trip to Iran : " . $_POST['lastTripDate'] . "\n"
                . "Date of planned arrival in Iran : " . $_POST['plannedArrivalDate'] . "\n"
                . "Visa obtaining location : " . $_POST['visaPickupLoc'] . "\n"
                . "Main address & contact details in Iran : " . $_POST['iranAddress'] . "\n"
                ;
    $headers = 'From: contact@bmpinst.ir' . "\r\n";

     // this line checks that we have a valid email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //This method sends the mail.
        mail($to, $subject, $message, $headers);
        // success message
        echo "Form application with success!";
    } else{
        echo "Invalid Email, please provide a correct email.";
    }

?>