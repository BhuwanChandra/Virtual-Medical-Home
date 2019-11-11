<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive side menu</title>
    <link rel="stylesheet" href="contact.css" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <div id="contact-form">
                <h1>Contact Us</h1>
                <input class="contact-input" type="text" name="name" placeholder="User Name"> <br>
                <input class="contact-input" type="email" name="email" placeholder="Email"><br>
                <input class="contact-input" type="tel" name="phone" placeholder="Phone Number(Optional)"><br>
                <textarea class="contact-input" type="text" name="message" cols="30" rows="10" placeholder="Message..."></textarea>
            </div>
        </div>
    </div>
</body>

</html>