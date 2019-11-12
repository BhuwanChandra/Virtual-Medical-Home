<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="style.css?v=<?= time(); ?>" />
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

    <div class="main-content">

        <?php
        echo "<h1>This is main Content</h1>";
        ?>
    </div>
</body>

</html>