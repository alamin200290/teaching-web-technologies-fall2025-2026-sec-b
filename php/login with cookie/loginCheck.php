<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "null" || $password == ""){
            echo "null value!";
        }else{

            if($username == $password){
                
                setcookie('status', 'true', time()+3000, '/');
                //$_SESSION['status'] = true;
                $_SESSION['username'] = $username;

                header('location: home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: login.html');
    }
?>