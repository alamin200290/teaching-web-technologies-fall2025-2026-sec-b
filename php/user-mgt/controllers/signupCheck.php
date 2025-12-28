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
            //$user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
            //array_push($users, $user);
            //$_SESSION['user'] = $user;

            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
            $sql = "insert into users values(null, '{$username}', '{$password}', '{$email}')";
            if(mysqli_query($con, $sql)){
                header('location: ../views/login.php');
            }else{
                header('location: ../views/signup.php');
            }
            
        }
    }else{
        header('location: ../views/signup.php');
    }
?>