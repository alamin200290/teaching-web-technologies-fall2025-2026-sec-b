<?php
    session_start();
    //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
        <form action="../controllers/loginCheck.php" method="post" enctype="">
            <fieldset>
            <legend>Login Page</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        
                         <a href="signup.php"> Signup</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>