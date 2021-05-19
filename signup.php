<html>

<head>
    <title>Sign up | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>

<body>
<?php include 'registration.php';?>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign Up to our newsletter</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                            <div class="red-text"><?php echo $errors['email']; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <div class="red-text"><?php echo $errors['username'];?></div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <div class="red-text"><?php echo $errors['password'];?></div>
                        </div>
                        <p class="signup-now">You already have an account.<a href="login.html" class="signup-nowlink">Log in</a> now!</p>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <p>Check the box if you agree with our
                            <a href="termsConditons.html" target="_blank">Terms and Conditions</a> and
                            <a href="privacyPolicy.html" target="_blank">Privacy & Policy</a>
                            <input class="tickInput" type="checkbox" name="termsAndConditions" value="Yes"> Yes
                        </p>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>