<?php
$host = "localhost";
$pass = "";
$db = "petmatch";
$user = "root";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>