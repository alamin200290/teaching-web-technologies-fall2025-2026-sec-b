<?php
    session_start();
    require_once('../models/userModel.php');
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "null" || $password == "" || $email == ""){
            echo "null value!";
        }else{
            
            $user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
            $status = addUser($user);
            if($status){
                header('location: ../views/login.php');
            }else{
                header('location: ../views/signup.php');
            }
            
        }
    }else{
        header('location: ../views/signup.php');
    }
?>