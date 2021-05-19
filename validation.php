<?php

session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'userregistration';
$con =mysqli_connect($host, $user, $pass, $db);

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * form usertable where email '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){    
        $_SESSION['username'] = $username;
        header('location:index.html');
}else {
    header('location:login.php');
}

mysqli_select_db($con, $db);

?>