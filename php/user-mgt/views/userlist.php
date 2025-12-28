<?php
   require_once('../controllers/authCheck.php');

   $users = [
    ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'],
    ['id'=>2, 'username'=>'abc', 'password'=>'123', 'email'=>'alamin@aiub.edu'],
    ['id'=>3, 'username'=>'xyz', 'password'=>'123', 'email'=>'alamin@aiub.edu'],
    ['id'=>4, 'username'=>'pqr', 'password'=>'123', 'email'=>'alamin@aiub.edu'],
    ['id'=>5, 'username'=>'asd', 'password'=>'123', 'email'=>'alamin@aiub.edu'],
    ['id'=>5, 'username'=>'asd', 'password'=>'123', 'email'=>'alamin@aiub.edu']
   ]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
         <h1>Userlist </h1>
        <a href="home.php">Back </a> |
        <a href="../controllers/logout.php">logout </a>
        <br><br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>

            <?php   foreach($users as $u){ ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?php echo $u['username']; ?>in</td>
                <td><?=$u['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?=$u['id']?>"> EDIT </a> | 
                    <a href="delete.php?id=<?=$u['id']?>"> DELETE </a> | 
                    <a href="details.php?id=<?=$u['id']?>"> DETAILS </a> 
                 </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>