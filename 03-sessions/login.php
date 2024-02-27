<?php


    require_once "config/app.php";
    require_once "config/database.php";

    if($_POST){
        $email = $_POST['email'];
        $pass = $_POST['password'];

       // echo var_dump($_POST);

       if(loginUsers($conx, $email, $pass)) {
        header("location: dashboard.php");
       } else{
        header("location: index.php"); 
       }
    }




?>

