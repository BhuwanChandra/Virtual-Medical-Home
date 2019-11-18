<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="style.css?v=<?= time(); ?>" />
<link rel="stylesheet" href="slide.css?v=<?= time(); ?>" />
</head>

<body>
    <div id="bg" class="head">
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
            <a href="">List of common diseases</a>
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

    <div class="our-services">

    </div>

    <div class="our-vision">
        <div class="vision">
            <center>
                <p class="vision-head">OUR VISION</p>
            </center>
            <p class="vision-text">Aim of <strong style="color:#e19fff;">
                    "Virtual Medical Home"</strong> project is to provide essential medical services online to everyone hardly matters
                you live in metro or a remotely located village. Users can connect through their home internet or approach any
                nearby kiosk to get these services. <br><br>
                The <strong style="color:#e19fff;">"Virtual Medical Home"</strong> - Practical Applications of Patient-Centered
                Medical home principles. Geriatric and primary care practices can transform patient care at the practice level
                by increasing access,improving care coordination,and analyzing practice-specific data. <br>
            </p>
        </div>
    </div>

    <div class="what-user-says">
        <div class="input-leftcontainer" id="input-leftcontainer">
            <div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev"></div>
            <div class="imgban" id="imgban3">
                <img class="user-ex-img" src="images/user.jpg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Rohan Sinha"</div>
                    <div class="user-text">
                        " Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque quo adipisci repudiandae
                        voluptates voluptatem aliquid assumenda iste officiis sequi possimus quas eveniet numquam architecto
                        quidem, sunt libero quasi ut aperiam quod. Commodi in facere inventore est! Quas dolorem explicabo
                        ducimus et distinctio, cupiditate Applications."
                    </div>
                </div>
            </div>
            <div class="imgban" id="imgban2">
                <img class="user-ex-img" src="images/user.jpg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Yash Vargantwar"</div>
                    <div class="user-text">
                        " Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque quo adipisci repudiandae
                        voluptates voluptatem aliquid assumenda iste officiis sequi possimus quas eveniet numquam architecto
                        quidem, sunt libero quasi ut aperiam quod. Commodi in facere inventore est! Quas dolorem explicabo
                        ducimus et distinctio, cupiditate Applications."
                    </div>
                </div>
            </div>
            <div class="imgban" id="imgban1">
                <img class="user-ex-img" src="images/user.jpg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Avdhesh Saroj"</div>
                    <div class="user-text">
                        " Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque quo adipisci repudiandae
                        voluptates voluptatem aliquid assumenda iste officiis sequi possimus quas eveniet numquam architecto
                        quidem, sunt libero quasi ut aperiam quod. Commodi in facere inventore est! Quas dolorem explicabo
                        ducimus et distinctio, cupiditate Applications."
                    </div>
                </div>
            </div>
            <div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next"></div>
        </div>
    </div>

    <?php
    require "partials/footer.php"
    ?>


    <script src="new.js?v=<?= time(); ?>"></script>
</body>

</html>