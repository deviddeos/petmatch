<?php
// Start a session
session_start();

// Connect to the database 
include "inc/database.php";

// Retrieve form data
$email = $_POST["email"]; // Assuming the form field name for email is 'email'
$pass = $_POST["password"]; // Assuming the form field name for password is 'password'

// Retrieve data from the database based on email and password
$sql = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();

    // Store user data in session variables
    $_SESSION['name'] = $row["name"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['address'] = $row["address"];
    $_SESSION['mobile'] = $row["mobile"];
    $_SESSION['aadhar'] = $row["aadhar"];
    $_SESSION['city'] = $row["city"];
    // You can store more data in session if needed

    // Redirect to index.php
    header("Location: index.php");
    exit();
} else {
    echo "Login failed. Please check your email and password.";
}

$conn->close();
?>








