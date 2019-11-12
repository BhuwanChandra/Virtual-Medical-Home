<?php

session_start();

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo " connection successful";
} else {
    echo " no connection";
}

mysqli_select_db($con, 'vmhdb_login');

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from users where name = '$name' && email = '$email'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
    if (password_verify($_POST["password"], $result["password"])) {
        $_SESSION['user_id'] = $result['user_id'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['user'] = "Patient";
        header('location:index.php');
    } else {
        $message = '<label>Wrong Password</label>';
    }
    // $_SESSION['currentUser'] = $name;
    // $_SESSION['currentUserEmail'] = $email;
    // $_SESSION['user'] = "Patient";
    header('location:doctorProfile.php');
} else {
    header('location:doctorReg.php');
}
