<?php
    session_start();

    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "null" || $password == "" || $email == ""){
            echo "null value!";
        }else{
            // if(){
            //     count();
            // };
            //$users = [];    
            $user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
            //array_push($users, $user);
            $_SESSION['user'] = $user;
            header('location: ../views/login.php');
        }
    }else{
        header('location: ../views/signup.php');
    }
?>