<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

$sql = "insert into users values(null, 'zzz', '123', 'zzz@aiub.edu')";

if(mysqli_query($con, $sql)){
    echo "success";
}else{
    echo "error";
}


$sql1 = "select * from users";
$result = mysqli_query($con, $sql1);
//print_r($result);
// $row = mysqli_fetch_assoc($result);
// print_r($row);
// $count = mysqli_num_rows($result);
$users =[];
while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    echo "<br>";
    //array_push($users, $row);
}


?>