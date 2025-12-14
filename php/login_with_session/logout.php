<?php

    session_start();
    session_destroy();

    unset($_SESSION['status']);

    header('location: login.html');

?>