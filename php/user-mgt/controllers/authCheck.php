<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: ../views/login.php');
    }
?>