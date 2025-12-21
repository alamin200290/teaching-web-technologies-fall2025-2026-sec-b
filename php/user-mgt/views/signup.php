<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>
        <form action="../controllers/signupCheck.php" method="post" enctype="">
            <fieldset>
            <legend>Signup Page</legend>
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
                    <td>Email</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <a href="login.php"> login</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>