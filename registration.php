<?php

session_start();

header('location:index.php');

$con = mysqli_connect('localhost','root');

if ($con) {
    echo" connection successful";
}else {
    echo" no connection";
}

mysqli_select_db($con, 'vmhdb_login');

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from users where name = '$name' && email = '$email' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" user already present";
}else {
    $qy = " insert into users(name , email , password) values('$name', '$email', '$pass') ";
    mysqli_query($con, $qy);
}
