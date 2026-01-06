<?php
//sleep(4);
$data = $_POST['user'];
//$user = json_decode($data);
$user = ['username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>'test'];
//echo "Your username is: ".$user->username; 
echo json_encode($user);

?>