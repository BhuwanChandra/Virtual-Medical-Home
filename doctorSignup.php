<?php

session_start();

header('location:index.php');

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo " connection successful";
} else {
    echo " no connection";
}

mysqli_select_db($con, 'vmhdb_login');

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$q = " select * from doctors where name = '$name' && email = '$email' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo " user already present";
} else {
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $qy = "insert into doctors(name , email , phone , password) values('$name', '$email', $phone, '$password') ";
    mysqli_query($con, $qy);
    $_SESSION['currentUser'] = $name;
    $_SESSION['currentUserEmail'] = $email;
    $_SESSION['user'] = "Doctor";
    header('location:index.php');
}
