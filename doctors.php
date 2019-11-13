<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="doctors.css?v=<?= time(); ?>" />
</head>

<body>
    <div id="bg" class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <h2 class="heading">Our Doctors Team</h2>
                <hr style="width:80vw;background-color:#232323;border:2px solid #232323;">
            </center><br>
        </div>

    </div>
    <div class="doctors-sec">
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="appoint.html" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="appoint.html" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="appoint.html" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
        <div class="doctor">
            <img src="user.jpg" alt="">
            <a href="" class="doctor-btn">View Profile</a>
            <a href="" class="doctor-btn">Get Appointment</a>
        </div>
    </div>
    <?php
    require "partials/footer.php"
    ?>
</body>

</html>