<?php

session_start();

// if (!isset($_SESSION['currentUser'])) {
//     header('location:Home.html');
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive side menu</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="head">
        <?php 
            require "partials/navbar.php";
        ?>
        <!-- <nav class="navbar">
            <span class="open-slide">
                <a href="#" onclick="openSlideMenu()">
                    <svg width="30" height="30">
                        <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                        <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                        <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
                    </svg>
                </a>
            </span>

            <ul class="navbar-nav">
                <li><a href="logout.php">LogOut</a></li>
                <li><a href="User.html">Welcome  </a></li>
            </ul>
        </nav>

        <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
            <a href="home.html">Home</a>
            <a href="firstaid.html">First Aid</a>
            <a href="">About</a>
            <a href="">Services</a>
            <a href="contact.html">Contact</a>
        </div> -->

        <div id="main">
            <center>
                <p class="heading">
                    Virtual Medical Home
                </p>
                <p class="sbheading">The Online Medical services</p>
            </center>
        </div>
    </div>

    <div class="main-content">

<?php 
echo "<h1>This is main Content</h1>";
?>

    </div>
<!-- 
    <script>
        function openSlideMenu() {
            document.getElementById("side-menu").style.width = "250px";
        }

        function closeSlideMenu() {
            document.getElementById("side-menu").style.width = "0";
        }
    </script> -->
</body>

</html>