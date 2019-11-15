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

$q = " select * from doctors where name = '$name' && email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

echo $num;

if ($num == 1) {
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION[ 'currentUser_id'] = $row['doctor_id'];
            $_SESSION[ 'currentUser'] = $row['name'];
            $_SESSION[ 'currentUserEmail'] = $row['email'];
            $_SESSION['user'] = "Doctor";
           header('location:index.php');
        
        }
}else {
    header('location:doctorReg.php');
}

?>
