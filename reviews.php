<?php 
    include 'dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="reviewStyle.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Reviews</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
    <script>
        $(document).ready(function() {
            var reviewsCount = 2;
            $("#moreReviewsBtn").click(function(){
                reviewsCount = reviewsCount + 2;
                $("#post-content").load("load-reviews.php", {
                    reviewsNewCount: reviewsCount
                });
            });
        });
    </script>    
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo3.png" width="110" height="75">
        </div>
        <div class="logo-text">
            <h2>Health and Fitness</h2>
        </div>
    </header>

    <!-- Post section ------------------------------------------------------------------- -->
    <div class="content" id="content">
        <div class="main-content single">
            <h2 class="post-title"><span>R</span>eviews <span>f</span>or <span>b</span>log <span>p</span>osts</h2>

            <div class="post-content" id="post-content">
                <?php
                    $sql = "select * from reviews limit 2";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<p>";
                            echo $row['author'].":";
                            echo "<br>";                    
                            echo $row['message']."<br><br>";
                            echo "</p>";
                        }
                    }else {
                        echo "There are no comments!";
                    }
                ?>
            </div>
            <div class="title">
            <button class="btn" id="moreReviewsBtn">More Reviews</button>
            </div>
        </div>
        <button id="dark-mode-toggle" class="dark-mode-toggle">
            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                <path fill="currentColor"
                    d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                    transform="translate(-8 -8)" />
            </svg>
        </button>
        <script src="dark-mode.js"></script>
    </div>

    <?php
        include('footer.php');
    ?>
    <div class="copyrightText">
        <p>Copyright © 2021 Health and Fitness. All Rights Reserved.
            <a href="termsConditons.html" target="_blank">Terms and Conditions</a><a href="privacyPolicy.html">Privacy Policy</a>
        </p>
    </div>
</body>

</html>