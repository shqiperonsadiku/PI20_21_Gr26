<?php
session_start();
$name = $review = '';
$errors = array('name'=>'','review'=>'');
$host = 'localhost';
$user = 'id15893390_userdb';
$pass = '';
$db = 'id15893390_userregistration';

$conn =mysqli_connect($host, $user, $pass, $db);
mysqli_select_db($con, $db);
if(isset($_POST['submit'])) {

    if(empty($_POST['name'])) {
        $errors['name'] = 'Name is required! <br/>';
    } else {
        $name =test_input($_POST['name']); // <----------- function call
        $s = " select * from usertable where username='$name'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
        if($num == 0){    
            $errors['name'] = 'You do not have an account yet '. "<a href=\"signup.php\">sign up</a>".' now, to submit a review!' ;
            }
        }

    if(empty($_POST['review'])) {
        $errors['review'] = 'Review is required for submit! <br/>';
    }
    if(!empty($_POST['name']) && $num != 0 && !empty($_POST['review'])){
        $review = test_input($_POST['review']);
        $reg = " insert into reviews(author, message) values ('$name', '$review')";
        $successful['review'] =  'Review submitted successfully!';
        mysqli_query($conn, $reg);
        //$_SESSION['username'] = $username;
        header('location:workoutsBlogPost.php');
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }
}

?>