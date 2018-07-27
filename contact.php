<?php
    if (isset($_POST["submit"])) {   
        $emailTo = ""; // add recipient email
        $subject = "Alien eJuice Contact Form";
        $body = "Name: " . $_POST["name"] . "\r\n";
        $body .= "Email: " . $_POST["email"] . "\r\n";
        $body .= "Message: " . $_POST["message"];
        $headers = "From: "; // add sender email
        $success = mail($emailTo, $subject, $body, $headers);
    }

?>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style type="text/css"> /* make pretty and customize to website */
        body {
            padding-top: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php if (isset($success) && $success) { ?>
        <h1>Thank you!</h1>
        <p>Your message has been sent.</p>
    <?php } else { ?>
        <h1>Oops!</h1>
        <p>Something went wrong, your message was not sent. Please try again.</p>
    <?php } ?>
</body>
