<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon - Vestroglo</title>
    <link rel="icon" href="images\logo.ico" type="image/jpg">
    <link rel="stylesheet" href="styles\main.css">
    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/exapnd.js"></script>

</head>

<body>
    <div class="center">
    
        <h1>COMING SOON!</h1>
        <h2>Contact us in the mean time!</h2>
      
        <div class="form-container">
            <form id="contactForm" action="scripts/send_mail.php" method="POST">
                <input required="yes" type="text" class="container" name="name" id="name" placeholder="Name?"
                    autocorrect="off">
                <input required="yes" type="email" class="container" name="email" id="email" placeholder="Email?"
                    autocapitalize="off" autocorrect="off">
                <textarea required="yes" type="text" class="container" name="message" id="message"
                    placeholder="Message?"></textarea>
                <br>
                <div class="btns">
                    <input class="submitForm container" id="btnClear" type="reset" value="Clear your message" />
                    <input class="submitForm container" id="btnSend" type="submit" value="Send" />
                </div>
            </form>
        </div>
        <div class="footer">
            Contact us directly!
            <br>
            Ian: ianm@vestroglo.com
        </div>
    </div>
    
</body>

</html>