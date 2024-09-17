<?php
session_start();
session_destroy();
// header('location: ' . $_SERVER['HTTP_REFERER']); //return to same page where login is done
header('location: login.php');
