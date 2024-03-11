<?php

require_once "config/app.php";

unset($_SESSION['uid']);
unset($_SESSION['urole']);
session_destroy();
header('location: index.php');