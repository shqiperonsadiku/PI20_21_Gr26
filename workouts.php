<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="workouts_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Workouts | Health&Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo3.png" width="110" height="75">
        </div>
        <div class="logo-text">
            <p>Workouts</p>
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="#workout-plans">Workout Plan</a></li>
            <li><a href="contactForm.php" target="_blank">Contact</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <video autoplay muted loop>
            <source src="images/runningVideo.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h2 class="be-text" id="be-text">Be
                <span style="display: initial;">Strong...</span>
                <span>Creative...</span>
                <span>Fun...</span>
                <span>Healthy...</span>
                <span>Confident...</span>
                <span>Awesome...</span>
            </h2>
        </div>
        <script type="text/javascript">
            var text = document.getElementById('be-text');
            var word = text.getElementsByTagName('span');

            var i = 0;

            function rotator() {
                word[i].style.display = 'none';
                i = (i + 1) % word.length;
                word[i].style.display = 'initial';
            }
            setInterval(rotator, 900);
        </script>
        <button id="dark-mode-toggle" class="dark-mode-toggle">
            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                <path fill="currentColor"
                    d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                    transform="translate(-8 -8)" />
            </svg>
        </button>
        <script src="dark-mode.js"></script>
    </section>
    <section class="img3d">
        <div class="heading">
            <h2 class="heading-text" id="heading-text">Popular Workout Posts</h2>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="images/dumbbells.jpeg">
            </div>
            <div class="img-content">
                <h2><a href="workoutsBlogPost.php">Lifting Weights</a></h2>
                <p></p>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="images/fitnessgirls.jpg">
            </div>
            <div class="img-content">
                <h2><a href="workoutsBlogPost.php">Bodyweight Exercises</a></h2>
                <p></p>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="images/boxing.jpeg">
            </div>
            <div class="img-content">
                <h2><a href="workoutsBlogPost.php">Boxing</a></h2>
                <p></p>
            </div>
        </div>
        </div>
    </section>
    <div class="heading">
        <h2 class="heading-text">Other Workout Posts</h2>
    </div>
    <div class="line-container">
        <div class="lines">
            <div class="logo-line"></div>
        </div>
    </div>
    <!-- Other Workouts SECTION ----------------------------------------------------------------- -->
    <section class="container1">
        <div class="row">
            <div class="column-post">
                <div class="blog">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/running.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>The best cardio workout</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="workoutsBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="column-post">
                <div class="blog">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/backgroundimg1.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Rope workout</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="workoutsBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="column-post">
                <div class="blog">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/gymBackground1.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Chest wokout</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="workoutsBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="column-post">
                <div class="blog">
                    <div class="imgBx">
                        <a href="workoutsBlogPost.php"><img src="images/yoga.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Yoga</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="workoutsBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Fun Workouts SECTION -------------------------------------------------------------------- -->
    <div class="heading">
        <h2 class="heading-text">Fun Workouts</h2>
    </div>
    <div class="line-container">
        <div class="lines">
            <div class="logo-line"></div>
        </div>
    </div>

    <section class="sectionCard">
        <div class="card-container">
            <div class="card">
                <div class="imgBx1">
                    <video autoplay muted loop>
                        <source src="images/cyclingVideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="card-contentBox">
                    <div class="card-content">
                        <h2>Cycling</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque iure architecto iusto quis dolorem, tenetur quidem dolore vel facilis.</p>
                        <a href="workoutsBlogPost.php">Read More . . .</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx1">
                    <video autoplay muted loop>
                        <source src="images/hikingVideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="card-contentBox">
                    <div class="card-content">
                        <h2>Hiking</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque iure architecto iusto quis dolorem, tenetur quidem dolore vel facilis.</p>
                        <a href="workoutsBlogPost.php">Read More . . .</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx1">
                    <video autoplay muted loop>
                        <source src="images/boxingVideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="card-contentBox">
                    <div class="card-content">
                        <h2>Boxing</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque iure architecto iusto quis dolorem, tenetur quidem dolore vel facilis.</p>
                        <a href="workoutsBlogPost.php">Read More . . .</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx1">
                    <video autoplay muted loop>
                        <source src="images/surfingVideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="card-contentBox">
                    <div class="card-content">
                        <h2>Surfing</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque iure architecto iusto quis dolorem, tenetur quidem dolore vel facilis.</p>
                        <a href="workoutsBlogPost.php">Read More . . .</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Workout Plans section -->
    <div class="heading">
        <h2 class="heading-text" id="workout-plans">Workout Plans</h2>
    </div>
    <div class="line-container">
        <div class="lines">
            <div class="logo-line"></div>
        </div>
    </div>
    <div class="workout-heading" id="workout-heading">
        <h2>Workout Plan Table for Beginners*</h2>
        <h2>Workout Plan Table for Advanced*</h2>
    </div>
    <section class="table-section">
        <table class="workoutTable">
            <thead>
                <tr>
                    <th>Days</th>
                    <th>Workout</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>All body mixed</td>
                    <td>30 minutes</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Rest Day</td>
                    <td>Free time</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Chest + Triceps + Legs</td>
                    <td>40 minutes</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Rest Day</td>
                    <td>Free time</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Bicep and Back</td>
                    <td>40 minutes</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>Rest Day</td>
                    <td>40 minutes</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Rest Day</td>
                    <td>Free TIme</td>
                </tr>
            </tbody>
        </table>

        <table class="workoutTable">
            <thead>
                <tr>
                    <th>Days</th>
                    <th>Workout</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>Chest and Triceps</td>
                    <td>45-50 minutes</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Biceps and Back</td>
                    <td>45-50 minutes</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Legs and Abs</td>
                    <td>45-50 minutes</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Rest Day</td>
                    <td>Free time</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Chest + Triceps + Biceps</td>
                    <td>45-50 minutes</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>Back + Legs + Abs</td>
                    <td>45-50 minutes</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Rest Day</td>
                    <td>Free TIme</td>
                </tr>
            </tbody>
        </table>
    </section>

    <div class="workout-heading">
        <h2>Workout Plan Table for Proffesionals week 1**</h2>
        <h2>Workout Plan Table for Proffesionals week 2</h2>
    </div>
    <section class="table-section">
        <table class="workoutTable">
            <thead>
                <tr>
                    <th>Days</th>
                    <th>Workout</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>Chest and Triceps</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Biceps and Back</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Legs and Abs</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Rest Day</td>
                    <td>Free Time</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Chest and Triceps</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>Biceps and Back</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Legs + Abs + Shoulders</td>
                    <td>60-70 minutes</td>
                </tr>
            </tbody>
        </table>

        <table class="workoutTable">
            <thead>
                <tr>
                    <th>Days</th>
                    <th>Workout</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>Rest Day</td>
                    <td>Free Time</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Chest and Trieps</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Biceps and Back</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Legs Abs Shoulders</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Rest Day</td>
                    <td>Free Time</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>Chest and Triceps</td>
                    <td>60-70 minutes</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Biceps and Back</td>
                    <td>60-70 minutes</td>
                </tr>
            </tbody>
        </table>
    </section>
    <div class="workout-explanation">
        <p>* Each workout plan(ex. Beginners Workout Plan) should be implemented for one month and then <br> move to the next level of the workout plan(ex. Advanced Workout Plan) which should be implemented for two months and then move on further. <br><br>            ** Proffesional Workout Plan should be implemented for 3 months and weights should be changed depending on how your body feels. <br><br>
            <i>If you need a diet plan to be completed click the button below!</i>
        </p>
    </div>
    <div class="btnToRecipes">
        <a href="recipes.php#diet-plans" class="btn">Diet Plans</a>
    </div>

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
    <?php
        include('footer.php');
    ?>
</body>

</html>