<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'homie';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>