<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="contact.css?v=<?= time(); ?>" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <div id="contact-form">
                    <form action="" method="post">
                        <p>Contact Us</p>
                        <hr>
                        <input class="contact-input" type="text" name="name" placeholder="User Name" required> <br>
                        <input class="contact-input" type="email" name="email" placeholder="Email" required><br>
                        <input class="contact-input" type="tel" name="phone" placeholder="Phone Number(Optional)" required><br>
                        <textarea class="contact-input" type="text" name="message" cols="30" rows="5" placeholder="Message..." required></textarea><br>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </center>
        </div>
    </div>
</body>

</html>