<?php

session_start();

if (!isset($_SESSION['currentUser'])) {
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive side menu</title>
    <link rel="stylesheet" href="User.css" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
    </div>

    <div class="main-content">
        <button class="button">EDIT</button>
    </div>

    <div class="main-content">

        <div class="profile-section">
            <img class="user-img" src="user.jpg" alt="">
            <h1>Rohan Sinha</h1>
        </div>

        <div class="information">
            <div>
                Name:
                <div class="info">
                    Krish Gayle
                </div>
            </div>
            <div>
                Email:
                <div class="info">
                    krish@yahoo.com
                </div>
            </div>
            <div>
                Age:
                <div class="info">
                    19
                </div>
            </div>
            <div>
                Height:
                <div class="info">
                    168cm
                </div>
            </div>
            <div>
                Weight:
                <div class="info">
                    64kg
                </div>
            </div>
            <div>
                Blood Group:
                <div class="info">
                    A+
                </div>
            </div>
            <div>
                Birth Mark(if any):
                <div class="info">

                </div>
            </div>


            <div>
                Family Information: <br>
            </div>
            <div>
                Father's Name:
                <div class="info">
                    Raju
                </div>
            </div>
            <div>
                Mother's Name:
                <div class="info">

                </div>
            </div>
        </div>

    </div>

</body>

</html>