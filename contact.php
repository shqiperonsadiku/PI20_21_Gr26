<?php    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $checkbox = $_POST['termsAndConditions'];
    
    if(empty( $_POST['name']) && empty( $_POST['message']) && empty( $_POST['email']) ) {
        echo 'Fields cannot be blank!';
    }else{
        if(empty( $_POST['email']) && empty( $_POST['message']) && !empty( $_POST['name']) ) {
            echo 'Email and message are required';
        }
        if(empty( $_POST['name']) && empty( $_POST['email']) && !empty( $_POST['message'])) {
            echo 'Name and email are required';
        }
        if(empty( $_POST['name']) && empty( $_POST['message']) && !empty( $_POST['email']) ) {
            echo 'Name and message are required';
        }
        if(empty( $_POST['email'])&& !empty( $_POST['message']) && !empty( $_POST['name']) ) {
            echo 'Email is required!<br/>';
        } 
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email) && !empty( $_POST['message']) && !empty( $_POST['name']) && !empty( $_POST['email'])){
            echo 'Enter a valid email address!';
        }
        if(empty($checkbox) &&filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) && !empty( $_POST['message']) && !empty( $_POST['name']) && !empty( $_POST['email'])){
            echo 'Check the terms and conditions box!';
        }
        
        if(empty( $_POST['message']) && !empty( $_POST['name']) && !empty( $_POST['email']))
        {
            echo 'Messsage is required!';
        }
        if(empty( $_POST['name']) && !empty( $_POST['email']) && !empty( $_POST['message']))
        {
            echo 'Name is required!';
        }
        
    }
    
    if(!empty( $_POST['email']) && preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email) && !empty( $_POST['name']) && !empty( $_POST['message']) && !empty($checkbox))
    {
        $email_from = 'HealthandFitness@info.com';
    
        $email_subject = $subject;
    
        $email_body = "User Name: $name\n".
                        "User Email: $visitor_email\n".
                            "User Message:\n $message.\n";
       
        $to = "healthandfitnessgr26@gmail.com";
        
        $headers = "From: $email_from \r\n";
    
        $headers .= "Reply-To: $visitor_email \r\n";
    
        if(mail($to,$email_subject,$email_body,$headers)){
            echo 'Your details have been submitted!';
        }
            
        
        
    }
    
?>
