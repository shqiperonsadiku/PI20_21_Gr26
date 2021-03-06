<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="recipes.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src=""></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Recipes | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo3.png" width="110" height="75">
        </div>
        <div class="logo-text">
            <p>Recipes</p>
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="workouts.php">Workouts</a></li>
            <li><a href="#diet-plans">Diet Plan</a></li>
            <li><a href="contactForm.php" target="_blank">Contact</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <video autoplay muted loop>
            <source src="images/healthyVideo.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h2>Healthy eating keeps the heart beating!</h2>
            <p>Don't leave it later, start eating healthy right now! Scroll down for the best healthy food recipes.
            </p>
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

    <section class="container0">
        <div class="heading">
            <h2>Popular Recipes</h2>
        </div>
        </div>
        <div class="line-container">
            <div class="lines">
                <div class="logo-line">
                </div>
            </div>
        </div>

        <ul id="autoWidth" class="cs-hidden">
            <!-- 1 ---------------------------------------- -->
            <li class="item-a">
                <div class="slide-box">
                    <div class="slide-img">
                        <img src="images/slicedVegs.jpg" alt="1">

                        <div class="overlay">
                            <a href="recipesBlogPost.php" class="readMore-btn">Read More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="slide-title">
                            <a href="recipesBlogPost.php">Sliced vegetables</a>
                            <span>sliced vegetables and cooked food</span>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 2 ---------------------------------------- -->
            <li class="item-b">
                <div class="slide-box">
                    <div class="slide-img">
                        <img src="images/healthyBreakfast.jpg" alt="2">

                        <div class="overlay">
                            <a href="recipesBlogPost.php" class="readMore-btn">Read More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="slide-title">
                            <a href="recipesBlogPost.php">Healthy Breakfast</a>
                            <span>full protein and healthy calories breakfast</span>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 3 ---------------------------------------- -->
            <li class="item-c">
                <div class="slide-box">
                    <div class="slide-img">
                        <img src="images/eggandavocado.jpg" alt="3">

                        <div class="overlay">
                            <a href="recipesBlogPost.php" class="readMore-btn">Read More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="slide-title">
                            <a href="recipesBlogPost.php">Egg and Avocado</a>
                            <span>quick healthy meal</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>


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



    <section class="container1">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h2>Latest Healthy Recipes</h2>
                    <p>
                        Make your favorite food in a healthy way
                    </p>
                </div>
            </div>
        </div>
        <div class="line-container">
            <div class="lines">
                <div class="logo-line">
                </div>
            </div>
        </div>
        <!-- Row 1 -->
        <div class="row1">
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthyPasta.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>How to make the healthiest pasta</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthySoup.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Green Healthy Soup</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthySushi.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Delicious Sushi</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row1">
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/recipes.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Green Salad</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthyPasta.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Delicious Spaghetti</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthySmoothie.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Broccoli Smoothie</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3 -->
        <div class="row1">
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthyPasta.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Vegetables and Pasta</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthySushi.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Sushi with green veggies</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                    <div class="imgBx">
                        <a href="recipesBlogPost.php"><img src="images/healthyBreakfast.jpg" alt=""></a>
                    </div>
                    <div class="blog-info">
                        <h3>Full Protein Breakfast</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta porro laborum asperiores veritatis dolores ex nihil impedit, earum delectus beatae officia, eum culpa ut quis?
                        </p>
                        <br>
                        <a href="recipesBlogPost.php">read more . . .</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="heading1">
        <h2 class="heading-text">Hover the mouse on the image below to see the effect of healthy food in your life!</h2>
    </div>
    <div class="line-container">
        <div class="lines">
            <div class="logo-line"></div>
        </div>
    </div>
    <div class="container2">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.container2 div').mouseover(
                function() {
                    $(this).addClass('flip')
                }
            )
        })
    </script>
    <div class="heading">
        <h2 class="heading-text" id="diet-plans">Diet Plans</h2>
    </div>
    <div class="line-container">
        <div class="lines">
            <div class="logo-line"></div>
        </div>
    </div>
    <section class="table-section">
        <table class="dietTable">
            <thead>
                <tr class="bulk-heading">
                    <td colspan="6">BULKING DIET TABLE</td>
                </tr>
                <tr>
                    <th>Meal</th>
                    <th>Food</th>
                    <th>Calories</th>
                    <th>Protein</th>
                    <th>Carbs</th>
                    <th>Fat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Breakfast</td>
                    <td>2 sweet potato and protein pancakes</td>
                    <td>358</td>
                    <td>24</td>
                    <td>59</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>1 teaspoon butter</td>
                    <td>34</td>
                    <td>0</td>
                    <td>0</td>
                    <td>3.9</td>
                </tr>
                <tr>
                    <td>1 scoop Nano Vapoor</td>
                    <td>45</td>
                    <td>0</td>
                    <td>3</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 1</td>
                    <td>437</td>
                    <td>24</td>
                    <td>62</td>
                    <td>6.9</td>
                </tr>
                <!-- ------------------------------------------------------------------- -->
                <tr class="weightlifting-heading">
                    <td colspan="6">WEIGHTLIFTING</td>
                </tr>
                <!-- ------------------------------------------------------------------- -->
                <tr>
                    <td rowspan="5">Post Workout Shake</td>
                    <td>1/2 serving Elemental Nutrition WPI</td>
                    <td>73</td>
                    <td>18</td>
                    <td>0.2</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>300ml rice milk</td>
                    <td>152</td>
                    <td>1.3</td>
                    <td>31.7</td>
                    <td>2.5</td>
                </tr>
                <tr>
                    <td>2 medium bananas</td>
                    <td>210</td>
                    <td>2.4</td>
                    <td>53.8</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>1 table spoon peanut butter OR almond butter</td>
                    <td>94</td>
                    <td>4</td>
                    <td>3.2</td>
                    <td>8.1</td>
                </tr>
                <tr>
                    <td>gluco samine, multivitamin</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 2</td>
                    <td>529</td>
                    <td>25.7</td>
                    <td>88.9</td>
                    <td>10.6</td>
                </tr>
                <!-- -------------------------------------------------------- -->
                <tr>
                    <td rowspan="5">Lunch</td>
                    <td>110g chicken breast OR turkey breast OR shrimp</td>
                    <td>118</td>
                    <td>25.5</td>
                    <td>0</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>300g(cooked) whole wheat pasta</td>
                    <td>373</td>
                    <td>16.1</td>
                    <td>79.7</td>
                    <td>1.7</td>
                </tr>
                <tr>
                    <td>100ml pasta sauce</td>
                    <td>96</td>
                    <td>1.9</td>
                    <td>16.3</td>
                    <td>1.9</td>
                </tr>
                <tr>
                    <td>100g steamed vegetables (broccoli, asparagus, string beans etc.)</td>
                    <td>34</td>
                    <td>2.8</td>
                    <td>6.6</td>
                    <td>0.3</td>
                </tr>
                <tr>
                    <td>2 teaspoon butter</td>
                    <td>68</td>
                    <td>0</td>
                    <td>0</td>
                    <td>7.7</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 3</td>
                    <td>689</td>
                    <td>46.3</td>
                    <td>102.6</td>
                    <td>13.1</td>
                </tr>
                <!-- ------------------------------------------------------- -->
                <tr>
                    <td rowspan="3">Snack</td>
                    <td>2 slices whole grain bread</td>
                    <td>160</td>
                    <td>8</td>
                    <td>28</td>
                    <td>0.2</td>
                </tr>
                <tr>
                    <td>2 tablespoons peanut butter OR almond butter</td>
                    <td>188</td>
                    <td>8</td>
                    <td>6.3</td>
                    <td>16.1</td>
                </tr>
                <tr>
                    <td>1 tablespoon jam</td>
                    <td>56</td>
                    <td>0.1</td>
                    <td>13.8</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 4</td>
                    <td>404</td>
                    <td>16.1</td>
                    <td>48.1</td>
                    <td>16.3</td>
                </tr>
                <!-- ----------------------------------------------- -->
                <tr>
                    <td rowspan="4">Dinner</td>
                    <td>120g sirloin, trimmed of fat OR 130g ground beef OR 140g Pink salmon</td>
                    <td>163</td>
                    <td>27.4</td>
                    <td>0</td>
                    <td>4.7</td>
                </tr>
                <tr>
                    <td>200g(cooked) brown rice</td>
                    <td>205</td>
                    <td>4.1</td>
                    <td>43.8</td>
                    <td>1.4</td>
                </tr>
                <tr>
                    <td>100g steamed vegetables (broccoli, asparagus, string beans etc.)</td>
                    <td>34</td>
                    <td>2.8</td>
                    <td>6.6</td>
                    <td>0.3</td>
                </tr>
                <tr>
                    <td>multivitamin</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 5</td>
                    <td>402</td>
                    <td>34.3</td>
                    <td>50.4</td>
                    <td>6.4</td>
                </tr>
                <tr>
                    <!-- TOTAL row -->
                    <td class="totals" colspan="2">TOTALS</td>
                    <td>2461</td>
                    <td>146.4</td>
                    <td>352</td>
                    <td>53.3</td>
                </tr>
                <tr>
                    <!-- TOTAL row -->
                    <td class="target" colspan="2">TARGET</td>
                    <td>2464</td>
                    <td>143</td>
                    <td>349.8</td>
                    <td>54.8</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="table-section">
        <table class="dietTable">
            <thead>
                <tr class="bulk-heading">
                    <td colspan="6">CUTTING DIET TABLE</td>
                </tr>
                <tr>
                    <th>Meal</th>
                    <th>Food</th>
                    <th>Calories</th>
                    <th>Protein</th>
                    <th>Carbs</th>
                    <th>Fat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Snack</td>
                    <td>Recommended: 1-2 scoops Legion Pulse</td>
                    <td>5</td>
                    <td>0</td>
                    <td>5</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Recommended: 10g BCAAs (needed for fasted training)</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Recommended: yohimbine (for fasted training)</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 1</td>
                    <td>5</td>
                    <td>0</td>
                    <td>5</td>
                    <td>0</td>
                </tr>
                <!-- --------------------------------------- -->
                <tr class="weightlifting-heading">
                    <td colspan="6">WEIGHTLIFTING</td>
                </tr>
                <!-- --------------------------------------- -->
                <tr>
                    <td rowspan="4">Breakfast</td>
                    <td>2 High Protein Banana Oatcakes</td>
                    <td>351</td>
                    <td>31</td>
                    <td>45</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>1 tablespoon syrup</td>
                    <td>52</td>
                    <td>0</td>
                    <td>13.4</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>1 cup 2% milk</td>
                    <td>130</td>
                    <td>9</td>
                    <td>12</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>multivitamin, glucosamine, 2000IU vitamin d-3, 2g CLA</td>
                    <td>20</td>
                    <td>0</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 2</td>
                    <td>553</td>
                    <td>40</td>
                    <td>70.4</td>
                    <td>13</td>
                </tr>
                <!-- ------------------------------------------------------------------- -->
                <tr>
                    <td rowspan="4">LUNCH</td>
                    <td>Honey Glazed Chicken</td>
                    <td>199</td>
                    <td>40</td>
                    <td>10</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>1 cup(cooked) brown rice</td>
                    <td>200</td>
                    <td>4</td>
                    <td>42.7</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>100g vegetables(broccoli,asparagus,zucchini,string beans,carrots,onions)</td>
                    <td>29</td>
                    <td>2.4</td>
                    <td>5.6</td>
                    <td>0.3</td>
                </tr>
                <tr>
                    <td>gluco samine, multivitamin</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 2</td>
                    <td>529</td>
                    <td>25.7</td>
                    <td>88.9</td>
                    <td>10.6</td>
                </tr>
                <!-- -------------------------------------------------------- -->
                <tr>
                    <td rowspan="3">Lunch</td>
                    <td>110g chicken breast OR turkey breast OR shrimp</td>
                    <td>118</td>
                    <td>25.5</td>
                    <td>0</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>300g(cooked) whole wheat pasta</td>
                    <td>373</td>
                    <td>16.1</td>
                    <td>79.7</td>
                    <td>1.7</td>
                </tr>
                <tr>
                    <td>100g steamed vegetables (broccoli, asparagus, string beans etc.)</td>
                    <td>34</td>
                    <td>2.8</td>
                    <td>6.6</td>
                    <td>0.3</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 3</td>
                    <td>428</td>
                    <td>46.4</td>
                    <td>58.3</td>
                    <td>2.6</td>
                </tr>
                <!-- ------------------------------------------------------- -->
                <tr>
                    <td rowspan="4">Snack</td>
                    <td>1 slice whole grain bread</td>
                    <td>80</td>
                    <td>4</td>
                    <td>14</td>
                    <td>0.1</td>
                </tr>
                <tr>
                    <td>1 tablespoon peanut butter OR almond butter</td>
                    <td>94</td>
                    <td>4</td>
                    <td>3.2</td>
                    <td>8.1</td>
                </tr>
                <tr>
                    <td>1 scoop whey protein</td>
                    <td>100</td>
                    <td>22</td>
                    <td>2</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>1 cup almond milk</td>
                    <td>30</td>
                    <td>1</td>
                    <td>1</td>
                    <td>2.5</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 4</td>
                    <td>304</td>
                    <td>31</td>
                    <td>20.2</td>
                    <td>10.7</td>
                </tr>
                <!-- ------------------------------------------------------- -->
                <tr>
                    <td rowspan="5">Dinner</td>
                    <td>120g sirloin, trimmed of fat</td>
                    <td>304</td>
                    <td>51.2</td>
                    <td>0</td>
                    <td>8.8</td>
                </tr>
                <tr>
                    <td>150g(cooked) quinoa</td>
                    <td>180</td>
                    <td>6.6</td>
                    <td>31.9</td>
                    <td>2.9</td>
                </tr>
                <tr>
                    <td>salad(2cups spinach, 1/2 carrot, 1/2 cucumber, 1/2 medium tomato)</td>
                    <td>54</td>
                    <td>2.9</td>
                    <td>8.4</td>
                    <td>0.5</td>
                </tr>
                <tr>
                    <td>3 tablespoons balsamic vineagar</td>
                    <td>30</td>
                    <td>0</td>
                    <td>6</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2g CLA, multivitamin</td>
                    <td>20</td>
                    <td>0</td>
                    <td>6</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 5</td>
                    <td>588</td>
                    <td>60.7</td>
                    <td>46.3</td>
                    <td>14.2</td>
                </tr>
                <!-- ----------------------------------------------- -->
                <tr class="weightlifting-heading">
                    <td colspan="6">HIT CARDIO</td>
                </tr>
                <!-- ------------------------------------------------ -->

                <tr>
                    <td rowspan="2">Dinner</td>
                    <td>200g 2% cottage cheese</td>
                    <td>179</td>
                    <td>27.1</td>
                    <td>7.2</td>
                    <td>3.9</td>
                </tr>
                <tr>
                    <td>1/4 cup pineapple</td>
                    <td>22</td>
                    <td>0</td>
                    <td>5.4</td>
                    <td>0</td>
                </tr>
                <tr class="total">
                    <!-- TOTAL row -->
                    <td>TOTAL</td>
                    <td>MEAL 6</td>
                    <td>201</td>
                    <td>27.1</td>
                    <td>12.6</td>
                    <td>3.9</td>
                </tr>
                <!-- ----------------------------------------------- -->
                <tr>
                    <!-- TOTAL row -->
                    <td class="totals" colspan="2">TOTALS</td>
                    <td>2079</td>
                    <td>205.2</td>
                    <td>212.8</td>
                    <td>44.2</td>
                </tr>
                <tr>
                    <!-- TOTAL row -->
                    <td class="target" colspan="2">TARGET</td>
                    <td>2077</td>
                    <td>207.7</td>
                    <td>207.7</td>
                    <td>46.2</td>
                </tr>
            </tbody>
        </table>
    </section>
    <div class="diet-explanation">
        <p>
            <i>If you need a workout plan to be completed click the button below!</i>
        </p>
    </div>
    <div class="btnToWorkouts">
        <a href="workouts.php#workout-plans" class="btn">Workout Plans</a>
    </div>

    <?php
        include('footer.php');
    ?>
</body>

</html>