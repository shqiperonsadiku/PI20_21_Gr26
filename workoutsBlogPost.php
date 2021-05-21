<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="workoutsBlogPost_style.css" rel="stylesheet" type="text/css">
    <title>Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo3.png" width="110" height="75">
        </div>
        <div class="logo-text">
            <h2>Health and Fitness</h2>
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
        <ul class="navigation" id="navigation">
            <li><a href="index.html">Home</a></li>
            <li><a href="recipes.html">Recipes</a></li>
            <li><a href="workouts.html">Workouts</a></li>
            <li><a href="contactForm.html">Contact</a></li>
        </ul>
        <script type="text/javascript">
            function toggleMenu() {
                const toggleMenu = document.querySelector('.toggleMenu');
                const navigation = document.querySelector('.navigation');
                toggleMenu.classList.toggle('active');
                navigation.classList.toggle('active');
            }

            // window.addEventListener('scroll', function () {
            //     const header = document.querySelector('header');
            //     header.classList.toggle("sticky", window.scrollY > 0);
            // });
        </script>
    </header>

    <!-- Post section ------------------------------------------------------------------- -->
    <div class="content" id="content">
        <div class="main-content single">
            <div class="post-image"></div>
            <h2 class="post-title">Workout Article</h1>

                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                </div><br><br><br>
                <div class="post-image1"></div><br><br><br>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatem mollitia esse adipisci ad molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae similique cupiditate blanditiis voluptatum quia cum et, nemo fuga nesciunt quod eligendi nihil, quasi ea placeat exercitationem! Provident quae aut libero?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus fuga autem sunt at, delectus quis deleniti illum odit veritatis vel, minima qui, natus quidem deserunt laboriosam eos quae. A aliquam consequuntur dignissimos
                        ratione at corporis ut totam sapiente quaerat.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, mollitia.</p>
                </div>
        </div>
        <div class="sidebar">
            <div class="section bigBox">
                <h2 class="section-title">Popular Posts</h2>
                <div class="box">
                    <div class="imgBx">
                        <a href="recipesBlogPost.html"><img src="images/healthyPasta.jpg"></a>
                    </div>
                    <div class="text">
                        <h3>Healthy Pasta</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/running.jpg"></a>
                    </div>
                    <div class="text">
                        <h3>The best cardio workout</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="recipesBlogPost.html"><img src="images/healthySushi.jpg"></a>
                    </div>
                    <div class="text">
                        <h3>Delicious Sushi</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/backgroundimg1.jpg"></a>
                    </div>
                    <div class="text">
                        <h3>Rope Workout</h3>
                    </div>
                </div>
            </div>

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="recipes.html">Recipes</a></li>
                    <li><a href="workouts.html">Workouts</a></li>
                    <li><a href="#social-media">Social Media</a></li>
                    <li><a href="#" class="button-bmi" id="button-bmi">BMI Calculator</a></li>
                    <li><a href="contactForm.html">Contact</a></li>
                </ul>
            </div>

            <div class="section social-media">
                <div class="social-logos">
                    <h2 class="section-title" id="social-media">Social Media</h2>
                    <div class="facebook">
                        <li>
                            <a href="https://www.facebook.com/everydayhealth" target="_blank"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <a href="https://www.facebook.com/everydayhealth" class="social-username" target="_blank">Health and Fitness</a>
                    </div>
                    <div class="facebook">
                        <li><a href="https://twitter.com/EverydayHealth" target="_blank"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>
                        <a href="https://twitter.com/EverydayHealth" class="social-username" target="_blank">@healthandfitness</a>
                    </div>
                    <div class="facebook">
                        <li><a href="https://www.instagram.com/everydayhealth/" target="_blank"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <a href="https://www.instagram.com/everydayhealth/" class="social-username" target="_blank">@healthandfitness</a>
                    </div>
                </div>
            </div>
            <div class="section topics">
                <h2 class="section-title">Give us a review</h2>
                <ul>
                    <form action="submitReview.php" method="POST" id="reviewForm">
                        <div class="inputBox">
                            <label>Name:</label>
                            <input name="name" id="name" type="text" class="input" autocomplete="on" placeholder="Required">
                            <div class="red-text"><?php echo $errors['name']; ?></div>-
                        </div>
                        <div class="inputBox">
                            <label>Review:</label>
                            <textarea name="review" id="review" class="input" placeholder="Review. . ." required></textarea>
                            <div class="red-text"><?php echo $errors['review']; ?></div>
                        </div>
                        <div class="inputBox">
                            <input class="inputBoxBtn" id="submit" type="submit" value="submit" name="submit">
                        </div>
                    </form>
                </ul>
            </div>
            <!-- 
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script type="text/javascript" >
                function formSubmit(){
                    $.ajax({
                        type: 'POST',
                        url: 'submitReview.php',
                        data:$('#reviewForm').serialize()
                    });
                    var form = document.getElementById('reviewForm').reset();
                    return false;
                }
            </script>-->
            <div class="section topics">
                <h2 class="section-title">Reviews</h2>
                <ul>
                    <li><a href="reviews.php" target="_blank">See reviews for this post!</a></li>
                </ul>
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

    <div class="pop-up-bmi">
        <script type="text/javascript">
            function BMI() {
                var h = document.getElementById('h').value;
                var w = document.getElementById('w').value;
                var bmi = w / (h / 100 * h / 100);
                var bmio = (bmi.toFixed(2));

                document.getElementById("result").innerHTML = "Your BMI is " + bmio;
            }

            document.getElementById('button-bmi').addEventListener('click',
                function() {
                    document.querySelector('.pop-up-bmi').style.display = 'flex';
                });
        </script>
        <div class="bmi-content">
            <div class="bmi-calculator">
                <div class="close">+</div>
                <h2>BMI Calculator</h2>
                <br />
                <p class="text">Height: </p>
                <input type="text" id="h">
                <p class="text">Weight: </p>
                <input type="text" id="w">
                <br>
                <br>
                <br>
                <p id="result"></p>
                <button id="btn" onClick="BMI()">Calculate</button>
                <br>
                <br>
                <p id="info">Please enter height [cm] and weight [kg]</p>
            </div>
            <script>
                document.querySelector('.close').addEventListener('click',
                    function() {
                        document.querySelector('.pop-up-bmi').style.display = 'none';
                    });
            </script>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="logo-footer">
                <h2>Health & Fitness</h2>
            </div>
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>This website is focused on giving you tips on how to improve your health and appearance through eating healthy and exercises.</p>
                <ul class="sci" id="sci">
                    <li><a href="https://www.facebook.com/everydayhealth" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/EverydayHealth" target="_blank"><i class="fa fa-twitter"
                                aria-hidden="true"></i></i></a></li>
                    <li><a href="https://www.instagram.com/everydayhealth/" target="_blank"><i class="fa fa-instagram"
                                aria-hidden="true"></i></i></a></li>
                </ul>
            </div>
            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <p><a href="https://www.google.com/maps/place/Rruga+B,+Prishtin%C3%AB/@42.6489516,21.1705272,17z/data=!3m1!4b1!4m5!3m4!1s0x13549ec0d5603ad7:0x1ba2ce0329d66240!8m2!3d42.6489477!4d21.1727159" target="_blank">Rruga B<br>Prishtin&euml;, 10000<br>Kosov&euml;</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel:38345123456">+383 45 123 456</a><br>
                            <a href="tel:38349123456">+383 49 123 456</a>
                        </p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <p><a href="mailto:healthandfitnessgr26@gmail.com">healthandfitness@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyrightText">
        <p>Copyright © 2021 Health and Fitness. All Rights Reserved.
            <a href="termsConditons.html" target="_blank">Terms and Conditions</a><a href="privacyPolicy.html" target="_blank">Privacy Policy</a>
        </p>
    </div>
</body>

</html>