<?php
//get data from form 

    ini_set('display_errors', 1);
    error_reporting( E_ALL );
    
    $from = "info@securehash.ca";
    $to = "bjayzee@gmail.com";
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    
    $subject = "Mail From SecureHash";
    $txt = "Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: " . $email  . "\r\n" ;
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
        echo '<script>alert("Message received. Thank you for contacting us")</script>';
        header('Location:https://securehash.ca/index.html');
    }
//redirect
?>