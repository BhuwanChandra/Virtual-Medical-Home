<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="doctorReg.css?v=<?= time(); ?>" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <div id="login-reg">
                    <div class="login-signup">
                        <span class="login">Login as Doctor</span>
                        <span class="register">Register as Doctor</span>
                    </div>
                    <div id="login-reg-form">
                        <div class="doc-login">
                            <form action="doctorValidation.php" method="post">
                                <input class="contact-input" type="text" name="username" placeholder="User Name" required> <br>
                                <input class="contact-input" type="email" name="email" placeholder="Email" required><br>
                                <button type="submit">LogIn</button>
                            </form>
                        </div>
                        <div class="doc-reg">
                            <form action="doctorSignup.php" method="post">
                                <input class="contact-input" type="text" name="username" placeholder="User Name" required> <br>
                                <input class="contact-input" type="email" name="email" placeholder="Email" required><br>
                                <input class="contact-input" type="tel" name="phone" placeholder="Phone Number(Optional)" required><br>
                                <input class="contact-input" type="password" name="password" placeholder="Password" required><br>
                                <button type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>