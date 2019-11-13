<script>
    function openSlideMenu() {
        document.getElementById("side-menu").style.width = "250px";
    }

    function closeSlideMenu() {
        document.getElementById("side-menu").style.width = "0";
    }
</script>
<nav class="navbar">
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
        <?php
        if (isset($_SESSION['currentUser'])) {
            echo '<li> <a href="logout.php" >LogOut </a> </li>';
            echo '<li><a href="User.php ">Welcome ' . $_SESSION['currentUser'] . '</a></li>';
        } else {
            echo '<li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>

<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="firstaid.php">First Aid</a>
    <a href="disease.html">Common Diseases</a>
    <a href="about.php">About Us</a>
    <a href="doctors.php">Doctors</a>
    <a href="contact.php">Contact Us</a>
</div>