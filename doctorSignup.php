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
$pass = $_POST['password'];
$phone = $_POST['phone'];

$q = " select * from doctors where name = '$name' && email = '$email' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo " user already present";
} else {
    $qy = " insert into doctors(name , email , phone_no , password) values('$name', '$email', '$phone', '$pass') ";
    mysqli_query($con, $qy);
    $result = mysqli_query($con, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['currentUser_id'] = $row['doctor_id'];
        $_SESSION['currentUser'] = $row['name'];
        $_SESSION['currentUserEmail'] = $row['email'];
        $_SESSION['user'] = "Doctor";
        header('location:index.php');
    }
}


?>
