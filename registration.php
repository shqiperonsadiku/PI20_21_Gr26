<?php

$errors = array('email'=>'', 'username'=>'', 'password'=>'');

session_start();
header('location:login.php');
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'userregistration';
$con =mysqli_connect($host, $user, $pass, $db);

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['submit'])) {
    
    if(empty($_POST['email'])) {
        $errors['email'] ='an email required <br/>';
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address!';
        }
    }

    if(empty($_POST['username'])) {
        $errors['username'] = 'an username is required <br/>';
    } else {
        if(!preg_match('/^[a-zA-z\s]+$/', $username)){
            $errors['username'] = 'Username must be letters and spaces only!';
        }
    }

    if(empty($_POST['password'])) {
        $errors['password'] = 'a password required <br/>';
    } else {
        preg_match('/[0-9]+/', $password, $matches);
        if(sizeof($matches)==0) {
            $errors['password'] = "The password must have at least one digit!";
            exit;
        }   
        preg_match('/[~!@#$%^&*()_,.]+/', $password, $matches);
        if(sizeof($matches)==0) {
            $errors['password'] ="The password must have at least one special character!";
            exit;
        }
        
        if(strlen($password) <= 8){
            $errors['password'] = "The password must be at least 8 characters long!";
            exit;
        }         
        
    }
    
}

$s = "select * form usertable where email '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){     
        echo" You already have an account! Sign in now.";
}else {
    $passHashed = password_hash($password, PASSWORD_DEFAULT);
    $reg = " insert into usertable(email, username, password) values ('$email', '$username', '$passHashed')";
    mysqli_query($con, $reg);
    echo" Registration successfully";
}

mysqli_select_db($con, $db);

?>