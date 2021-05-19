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
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <p class="signup-now">You don't have an account yet? <a href="signup.html" class="signup-nowlink">Sign Up</a> now!</p>
                        <button type="submit" class="btn btn-primary">Log in</button>
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