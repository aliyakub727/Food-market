<?php
//function start lagi
session_start();

$_SESSION['session_username'] = '';
unset($_SESSION['session_username']);
//session terdaftar, saatnya logout
session_unset();
session_destroy();
header("location:http://localhost/food-market/");
