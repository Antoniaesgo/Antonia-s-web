<?php

require_once "config/app.php";

unset($_SESSION['uid']);
session_destroy();
header('location: index.php');