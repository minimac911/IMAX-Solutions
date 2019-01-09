
<?php
    error_reporting(0);
    $adminEmail = "admin@vestroglo.com";
    $ownerEmail = "ianm@vestroglo.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = "From: $name"; 
    $subject = 'Contact Form';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if (mail ($ownerEmail, $subject, $body, $from) && mail ($adminEmail, $subject, $body, $from)) { 
        $success = "Message successfully sent! ";
        $success .= "We will be in contact soon!";
        $result = "Sent - vestroglo";
        $button = "Home";
        $id = "btnSuc";
    } else {
        $success = "Message Sending Failed, please try again!";
        $result = "Failed - vestroglo";
        $button = "Retry";
        $id = "btnFail";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../styles/mail.css">

    <title><?php echo $result; ?></title>
</head>
<body>
    <div class="center">
        <h1><?php echo $success; ?></h1>
        <input id=<?php echo $id;?> type="button" value=<?php echo $button;?> onclick="history.back(-1)" />
    </div>
</body>
</html>