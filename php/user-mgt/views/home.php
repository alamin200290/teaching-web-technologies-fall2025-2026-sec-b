<?php
   //include('authCheck.php');
   //include_once('abc.php');
   //require('authCheck.php');
   require_once('../controllers/authCheck.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username'];?></h1>
        <a href="userlist.php">User List </a> |
        <a href="../controllers/logout.php">logout </a>
</body>
</html>