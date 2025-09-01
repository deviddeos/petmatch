<?php
// Connect to the database 
include"../inc/database.php";
// Retrieve form data
$firstname = $_POST["firstname"];
$email = $_POST["email"];

$pass = $_POST["pass"];
$lastname = $_POST["lastname"];




// Insert data into the database
$sql = "INSERT INTO admin (firstname, lastname, email,pass)
        VALUES ('$firstname', '$lastname', '$email','$pass')";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>