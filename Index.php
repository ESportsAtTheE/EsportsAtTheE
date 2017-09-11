<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $uname = $_POST['uname']
    $phone = $_POST['phone']
     $from = 'From: JebBesecker'; 
    $to = 'esportsatthee@gmail.com'; 
    $subject = 'Sign Up Information';
    $body = "From: $name\n E-Mail: $email\n TeamName: $password\n Game Name: $uname\n Phone: $phone" ;
?>
<?php
if ($_POST['signup']) {
   (mail ($to, $subject, $body, $from)) { 
        
    else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>
