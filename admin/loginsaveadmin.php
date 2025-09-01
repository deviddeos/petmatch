<?php
// Start a session
session_start();


include "../inc/database.php";


$email = $_POST["email"];
$pass = $_POST["pass"];


$sql = "SELECT * FROM admin WHERE email='$email' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    $row = $result->fetch_assoc();

    
    $_SESSION['firstname'] = $row["firstname"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['pass'] = $row["pass"];
    
  
    header("Location: admin.php");
    exit();
} else {
    echo "Login failed. Please check your email and password.";
}

$conn->close();
?>