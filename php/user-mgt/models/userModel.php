<?php
require_once('db.php');


function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);   
    
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}

function getUserById($id){

}

function getAllUser(){

}

function addUser($user){
    $con = getConnection();
    $sql = "insert into users values(null, '{$user['username']}', '{$user['password']}', '{$user['email']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function deleteUser($id){

}

function updateUser($user){

}

?>