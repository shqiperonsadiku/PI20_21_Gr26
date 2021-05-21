<?php
session_start();
$email = $username = $password = '';
$errors = array('email'=>'', 'username'=>'', 'password'=>'');

$host = 'localhost';
$user = 'id15893390_userdb';
$pass = '';
$db = 'id15893390_userregistration';
$conn =mysqli_connect($host, $user, $pass, $db);

mysqli_select_db($conn, $db);

if(isset($_POST['submit'])) {    
    if(empty( $_POST['email'])) {
        $errors['email'] ='Email is required!<br/>';
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Enter a valid email address!';
        }else{
            $s = " select * from usertable where email='$email'";
            $result = mysqli_query($conn, $s);
            $num = mysqli_num_rows($result);
            if($num == 1){    
                $errors['email'] = 'You already have an account with this email!';
            }
        }
    }

    if(empty($_POST['username'])) {
        $errors['username'] = 'Username is required! <br/>';
    } else {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        if(!preg_match('/^[a-zA-z\s]+$/', $username)){
            $errors['username'] = 'Username must be letters and spaces only!';
        }else {
            $s = " select * from usertable where email='$email'";
            $result = mysqli_query($conn, $s);
            $num = mysqli_num_rows($result);
            if($num == 1){    
                $errors['username'] = 'Username already taken!';
            }
        }
    }

    if(empty($_POST['password'])) {
        $errors['password'] = 'Password is required! <br/>';
    } else if(isset($_POST['password'])){
        $password =mysqli_real_escape_string($conn, $_POST['password']);
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars){
            $errors['password'] =  'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.';
        }
        }
    if( !empty( $_POST['email']) && filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) && $num != 1 && !empty($_POST['username']) && preg_match('/^[a-zA-z\s]+$/', $username) && !empty($_POST['password']) && strlen($password) > 8 && $number && $uppercase && $lowercase && $specialChars)
    {
                $passHashed = password_hash($password, PASSWORD_DEFAULT);
                $reg = " insert into usertable(email, username, password) values ('$email', '$username','$passHashed')";
                mysqli_query($conn, $reg);
                //$_SESSION['username'] = $username;
                header('location:login.php');
    }
        
    }
?>

<html>
<head>
    <title>Sign up | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign Up to our newsletter</h2>
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
                            <div class="red-text"><?php echo $errors['email']; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
                            <div class="red-text"><?php echo $errors['username']; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password?>">
                            <div class="red-text"><?php echo $errors['password']; ?></div>
                        </div>
                        <p class="signup-now">You already have an account.<a href="login.php" class="signup-nowlink">Log in</a> now!</p>
                        <button type="submit" name='submit' value='submit' class="btn btn-primary">Sign Up</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>