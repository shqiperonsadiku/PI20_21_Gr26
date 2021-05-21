<!DOCTYPE html>
<html manifest="cachingPage.caching">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="index_style.css" rel="stylesheet" type="text/css">
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
            <li><a href="signup.html">Sign up</a></li>
            <li><a href="login.html">Log in</a></li>
            <li><a href="#recipes">Recipes</a></li>
            <li><a href="#workouts">Workouts</a></li>
            <li><a href="#contact-section">Contact</a></li>
            <li><a href="#" class="button-bmi" id="button-bmi">BMI Calculator</a></li>
        </ul>
        <script type="text/javascript">
            function toggleMenu() {
                const toggleMenu = document.querySelector('.toggleMenu');
                const navigation = document.querySelector('.navigation');
                toggleMenu.classList.toggle('active');
                navigation.classList.toggle('active');
            }

            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });
        </script>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <div class="contentBox">
                <h2>Turn Fat into FIT!</h2>
                <p>If you want to be a hit in life, you gotta be fit and fine. So be physically fit, you know you'll like it!!! Losing will never feel so good.
                </p>
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
    </section>
    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="title-text"><span>A</span>bout Us</h2>
                <p>Our mission is to inspire and enable wellness each and every day. Health and Fitness bridges the gap between lifestyle and medical websites by delivering trusted health information and resources along with the stories, tips, tools, and
                    insights of the day's most influential and compelling voices, role models, and celebrities.<br><br> We use secure resources to give you the best advices possible in the field of nutritional body intake and professional workout or exercises
                    plan for you to achieve the results that you dream for. We use reliable resources to convey to you the best advice in the field of nutrition and exercises with certain plans designed by nutritionists and professional trainers, which
                    will help you to maximally improve your health and achieve the results you have always wanted and dreamed of.
                </p>
            </div>
            <div class="col50">
                <div class="col50-img">
                    <img src="images/backgroundimg.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="recipes" id="recipes">
        <div class="title">
            <h2 class="title-text"><span>H</span>ealthy <span>R</span>ecipes</h2>
            <p>Find your favorite meal, and make a healthy recipe!</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/recipes.jpg"></a>
                </div>
                <div class="text">
                    <h3>Tasty Salad</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/healthySoup.jpg"></a>
                </div>
                <div class="text">
                    <h3>Special Soup</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/healthyPasta.jpg"></a>
                </div>
                <div class="text">
                    <h3>Healthy Pasta</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/healthySushi.jpg"></a>
                </div>
                <div class="text">
                    <h3>Sushi</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/healthySmoothie.jpg"></a>
                </div>
                <div class="text">
                    <h3>Healthy Smoothie</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="recipesBlogPost.php"><img src="images/healthyFruitSalad.jpg"></a>
                </div>
                <div class="text">
                    <h3>Healthy Fruit Salad</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="recipes.php" class="btn">View All</a>
        </div>
    </section>

    <section class="workouts" id="workouts">
        <div class="title">
            <h2 class="title-text"><span>W</span>orkout and have fun too</h2>
            <p>Don't workout just to complete a task, make it an enjoyable experience</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a href="workoutsBlogPost.php"><img src="images/hiking.jpg"></a>
                </div>
                <div class="text">
                    <h3>Hiking</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="workoutsBlogPost.php"><img src="images/surfing.jpg"></a>
                </div>
                <div class="text">
                    <h3>Surfing</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="workoutsBlogPost.php"><img src="images/yoga.jpg"></a>
                </div>
                <div class="text">
                    <h3>Yoga</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="workoutsBlogPost.php"><img src="images/boxing.jpeg"></a>
                </div>
                <div class="text">
                    <h3>Boxing</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="workouts.php" class="btn">More Workouts</a>
        </div>
    </section>

    <section class="contact-section" id="contact-section">
        <div class="title">
            <h2 class="title-text"><span>C</span>ontact Us</h2>
            <p>If you have something to ask us, feel free to send us an email.</p>
        </div>
        <div class="contactForm">
            <form id="contactForm" name="contactForm" method="post" action="contact.php" onsubmit="return formSubmit();">
                <h3>Send Message</h3>
                <div class="inputBox">
                    <input name="name" type="text" class="input" autocomplete="on" placeholder="Your Name">
                </div>
                <div class="inputBox">
                    <input name="email" type="email" class="input" placeholder="Your Email" autocomplete="on" required>
                </div>
                <div class="inputBox">
                    <input name="subject" type="text" class="input" placeholder="Subject...">
                </div>
                <div class="inputBox">
                    <textarea name="message" placeholder="Message. . ." required></textarea>
                    <div class="green-text"><p id="success"></p></div>
                </div>
                <p>Check the box if you agree with our
                    <a href="termsConditons.php" target="_blank">Terms and Conditions</a> and
                    <a href="privacyPolicy.php" target="_blank">Privacy & Policy</a>
                    <input class="tickInput" type="checkbox" name="termsAndConditions" value="Yes"> Yes
                </p>
                <div class="inputBox">
                    <input class="inputBoxBtn" type="submit" value="send" onclick="submitClick();">
                </div>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" >
            function formSubmit(){
                    $.ajax({
                        type: 'POST',
                        url: 'contact1.php',
                        data:$('#contactForm').serialize(),
                        success:function(response){
                            $('#success').html(response);
                            
                        }
                    });
                    var form = document.getElementById('contactForm').reset();
                    return false;
                }
        </script>
    </section>
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
    <?php
        include('footer.php');
    ?>    
</body>

</html>