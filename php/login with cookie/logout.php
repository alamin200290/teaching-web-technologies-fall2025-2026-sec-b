<?php

    //session_start();
    //session_destroy();
    //unset($_SESSION['status']);

    setcookie('status', 'true', time()-10, '/');
    header('location: login.html');

?>