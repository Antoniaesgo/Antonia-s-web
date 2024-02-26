<?php
    require_once "config/app.php";
    require_once "config/database.php";

    if(isset($_GET['id'])){
        if (deletePet($conx, $_GET['id'])){
            header("Location: index.php");
        }
    }

