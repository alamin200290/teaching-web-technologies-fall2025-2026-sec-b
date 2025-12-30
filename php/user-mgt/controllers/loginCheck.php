<?php
    session_start();
    require_once('../models/userModel.php');
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "null" || $password == ""){
            echo "null value!";
        }else{
            $user = ['username'=> $username, 'password'=> $password];
            $status = login($user);
            if($status){
                setcookie('status', 'true', time()+3000, '/');
                //$_SESSION['status'] = true;
                $_SESSION['username'] = $username;
                header('location: ../views/home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: ../views/login.php');
    }
?>