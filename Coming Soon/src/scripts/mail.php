<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \nMessage: $message";
    $subject = "Contact Form";

    $adminEmail = "admin@vestroglo.com";
    $ownerEmail = "ianm@vestroglo.com";

    $mailheader = "From: $email \r\n";

    // mail($adminEmail, $subject, $formcontent, $mailheader) or die("Error!");
    // mail($ownerEmail, $subject, $formcontent, $mailheader) or die("Error!");

    //Change this when launching to 'Location: http://vestroglo.com/'
    header('Location: /IMAX-Solutions/Coming%20Soon/src/');
    echo("Thank");
    exit();
?>