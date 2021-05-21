<?php
$name = $review = '';
$errors = array('name'=>'','review'=>'');

$host = 'localhost';
$user = 'id15893390_userdb';
$pass = '';
$db = 'id15893390_userregistration';

$conn =mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Could not connect: ".mysqli_connect_error());
} else {
    $name =test_input($_POST['name']);
    $review = test_input($_POST['review']); 
    if(empty($_POST['name']) && empty($_POST['review']))
    {
        echo '<br>'."Name and review required!";
    }elseif(empty($_POST['name']) && !empty($_POST['review'])) {
        //$errors['name'] = 'Name is required! <br/>';
        echo '<br>'."Name is required!";
    }
    if(!empty($_POST['name'])){
        $s = " select * from usertable where username='$name'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
        if($num == 0){    
            echo 'You do not have an account yet '. "<a href=\"signup.php\">sign up</a>".' now, to submit a review! ' ;
            }
    }
    if(empty($_POST['review']) && !empty($_POST['name'])){
        echo '<br>'.'Review is required!';
    }
    
    if(!empty($_POST['name']) && $num != 0 && !empty($_POST['review'])){
        $reg = " insert into reviews(author, message) values ('$name', '$review')";
        if(mysqli_query($conn, $reg)){
            echo "Review submitted successfully";
        }
    }
    mysqli_close($conn);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}

?>