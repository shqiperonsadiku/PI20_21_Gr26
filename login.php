<?php

session_start();
$errors = array('email'=>'', 'username'=>'', 'password'=>'');
$host = 'localhost';
$user = 'id15893390_userdb';
$pass = '';
$db = 'id15893390_userregistration';
$con =mysqli_connect($host, $user, $pass, $db);

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_select_db($con, $db);

if(isset($_POST['submit'])) {    
        
        //$s = " select * from usertable where username='$username' && password = '$password'";
        $s = " select * from usertable where username='$username'";
        $result = mysqli_query($con, $s);

        $num = mysqli_num_rows($result);

        if($num == 1){    
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password, $row['password'])){
                    $_SESSION['username'] = $username;
                    header('location:homepage.php');
                }else {
                    $errors['username'] = 'Username or password incorrect!';
                }   
            }
        }else {
            $errors['username'] = 'Username or password incorrect!';
        }
    }

?>
<html>

<head>
    <title>Log in | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>

<body>

    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6">
                    <h2>Login Here</h2>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <div class="red-text"><?php echo $errors['username']; ?></div>
                        </div>
                        <p class="signup-now">You don't have an account yet? <a href="signup.php" class="signup-nowlink">Sign Up</a> now!</p>
                         <p class="signup-now">Or continue as a <a href="index.html" class="signup-nowlink">guest</a> </p>
                        <button type="submit" name='submit' value='submit' class="btn btn-primary">Log in</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>