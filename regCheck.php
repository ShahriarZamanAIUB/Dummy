<?php
     
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        header('location: registration.php?err=null');
    }else{
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
        $_SESSION['user'] = $user;
        header('location: login.php');
    }

?>