<?php 
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_blog";

$connect = mysqli_connect($host, $username, $pass, $db);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} 