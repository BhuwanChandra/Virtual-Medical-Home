<?php require "partials/header.php" ?>
<link rel="stylesheet" href="User.css?v=<?= time(); ?>" />
</head>

<?php

if (!isset($_SESSION['currentUser'])) {
    header('location:index.php');
}

?>
<script>
    function enableEditing() {
        let inputs = document.querySelectorAll("input");

        inputs.forEach(element => {
            element.removeAttribute("disabled");
        });

        document.querySelector(".submitBtn").style.display = "block";
    }
</script>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
    </div>

    <div class="main-content">
        <button class="button" onclick="enableEditing()">EDIT</button>
    </div>

    <div class="main-content">

        <div class="profile-section">
            <img class="user-img" src="user.jpg" alt="">
            <?php echo '<h1>' . $_SESSION['currentUser'] . '</h1>'; ?>
        </div>

        <div class="information">
            <form action="#">
                <div class="info-tag">
                    General Information: <br>
                </div>
                <hr>
                <div>
                    Name: <br>
                    <input type="text" name="name" class="info" placeholder="Name" value="<?php echo $_SESSION['currentUser']; ?>" disabled>
                </div>
                <div>
                    Email: <br>
                    <input type="email" name="email" class="info" placeholder="Email" value="<?php echo $_SESSION['currentUserEmail']; ?>" disabled>
                </div>
                <div>
                    DOB: <br>
                    <input type="date" name="email" class="info" placeholder="date of birth" value="<?php echo $_SESSION['currentUserDOB']; ?>" disabled>
                </div>

                <div class="info-tag">
                    Health Information: <br>
                </div>
                <hr>
                <div>
                    Age: <br>
                    <input type="number" name="age" class="info" placeholder="Age(in years)" value="" disabled>
                </div>
                <div>
                    Height: <br>
                    <input type="number" name="height" class="info" placeholder="Height(in centimeters)" value="" disabled>
                </div>
                <div>
                    Weight: <br>
                    <input type="number" name="weight" class="info" placeholder="Weight(in KGs)" value="" disabled>
                </div>
                <div>
                    Blood Group: <br>
                    <input type="text" name="bloodGroup" class="info" placeholder="Blood Group" maxlength="3" value="" disabled>
                </div>
                <div>
                    Birth Mark: <br>
                    <input type="text" name="birthMark" class="info" placeholder="Birth Mark(if any)" value="" disabled>
                </div>

                <div class="info-tag">
                    Family Information: <br>
                </div>
                <hr>
                <div>
                    Father's Name: <br>
                    <input type="text" name="fatherName" class="info" placeholder="Father's Name" value="" disabled>
                </div>
                <div>
                    Mother's Name: <br>
                    <input type="text" name="motherName" class="info" placeholder="Mother's Name" value="" disabled>
                </div>
                <div>
                    <button type="submit" class="submitBtn">Update Information</button>
                </div>
            </form>
        </div>

    </div>

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>