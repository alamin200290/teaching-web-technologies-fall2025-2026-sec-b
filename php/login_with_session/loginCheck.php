<?php
    session_start();
    //print_r($_GET);
    //var_dump($_GET);
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "null" || $password == ""){
            echo "null value!";
        }else{

            if($username == $password){
                //echo "valid user!";
                $_SESSION['status'] = true;
                $_SESSION['username'] = $username;

                header('location: home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        //echo "please submit login form!";
        header('location: login.html');
    }
?>