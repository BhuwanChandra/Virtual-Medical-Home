<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../footer.css">
</head>

<body>
    <footer>
        <div class="newsletter">
            SignUp for our weekly newsletter
            <input type="email" name="email" placeholder="example@example.com">
            <button type="submit">Subscribe</button>
        </div>
        <div class="footer_section">
            <div class="sec1">
                <li><a href="index.php">Home</a></li>
                <li><a href="firstaid.php">First Aid</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="">Doctors</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </div>
            <div class="sec1">
                <?php
                if (!isset($_SESSION['currentUser']) || ($_SESSION['user'] == "Doctor")) {
                    echo '<li><a href="index.php">Register as a Doctor</a></li>';
                    echo '<li><a href="firstaid.php">Login as a Doctor</a></li>';
                }
                ?>
                <li><a href="about.php">Privacy policy</a></li>
                <li><a href="">Terms of use</a></li>
            </div>
        </div>
        <div class="social_media">

        </div>
        <div class="cpryt">

        </div>
    </footer>
</body>

</html>