<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $massageSubject = $_POST['subject'];
        $message = $_POST['message']; 

        $to = "ramblekb@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Subject: ".$messageSubject. "\r\n";
        $body .= "Message: ".$userMessage. "\r\n";

        mail($to, $messageSubject, $body);

        $message_sent = true;
}
// else{
//     $invalid_class_name = "form-invalid";
// }

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio BOCA Contact</title>
    <link rel="stylesheet" href="email.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="email.js"></script>
</head>

<body>
    <?php 
if($message_sent):
    ?>

    <h3>Thanks, we'll be in touch.</h3>

    <?php
else:
?>

<div class="media">
        <img src="/images/Artboard 1-8.png" style="width:250px; position: relative; right: 70px; margin-left: 10%;">
    </div>
        <div class="container">
            <form action="email.php" method="POST" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn">Send Message</button>
                </div>
            </form>
        </div>
        <?php
    endif;
    ?>

</body>
</html>
