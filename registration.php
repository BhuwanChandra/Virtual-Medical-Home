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
    $result = mysqli_query($con, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['currentUser_id'] = $row['id'];
        $_SESSION['currentUser'] = $row['name'];
        $_SESSION['currentUserEmail'] = $row['email'];
        $_SESSION['currentUserDOB'] = $row['dob'];
        $_SESSION['currentUserAge'] = $row['age'];
        $_SESSION['currentUserHeight'] = $row['height'];
        $_SESSION['currentUserWeight'] = $row['weight'];
        $_SESSION['currentUserBloodGroup'] = $row['bloodGroup'];
        $_SESSION['currentUserBirthMark'] = $row['birthMark'];
        $_SESSION['currentUserFathersName'] = $row['fathersName'];
        $_SESSION['currentUserMothersName'] = $row['mothersName'];
        $_SESSION['user'] = "Patient";
        header('location:index.php');
    }
}

?>