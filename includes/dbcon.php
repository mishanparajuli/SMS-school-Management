<?php


//For XAMPP
$ser = 'localhost';
$db = 'school_ms';
$usr = 'root';
$pwd = '';
$conn = mysqli_connect($ser, $usr, $pwd, $db);
if (!$conn) {
    die('connection failed');
}

?>
