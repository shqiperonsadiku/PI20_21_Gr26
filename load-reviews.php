<?php
    include 'dbh.php';

    $reviewsNewCount =$_POST['reviewsNewCount'];

    $sql = "select * from reviews limit $reviewsNewCount";
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
