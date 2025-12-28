<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "null" || $password == ""){
            echo "null value!";
        }else{

            $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
            $sql = "select * from users where username='{$username}' and password='{$password}'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);

            if($count == 1){
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