<?php

    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $ext = explode('.', $_FILES['myfile']['name']);
    $count = count($ext);
    $fileExt = $ext[$count-1];
    $des = "upload/".time().".".$fileExt;

   if( move_uploaded_file($src, $des)){
    echo "success";
   }else{
    echo "error";
   }
?>