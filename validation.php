<?php

session_start();

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

$q = " select * from users where name = '$name' && email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    
    $_SESSION['currentUser'] = $name;
    $_SESSION['currentUserEmail'] = $email;
    header('location:index.php');

}else {
    header('location:login.php');
}
