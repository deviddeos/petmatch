<?php
// Start the session
session_start();

// Check if the user is logged in and username is set in the session
if (!isset($_SESSION['name'])) {
    // Redirect the user to the login page or handle the scenario where the user is not logged in
    // For example:
    header("Location: login.php");
    exit;
}

include "inc/database.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    // Get the username from the session
    $username = $_SESSION['name'];

    // Handle image upload
    $image_path = '';
    if ($_FILES['image']['size'] > 0) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert feedback data into the database
    $sql = "INSERT INTO feedback (username, image, message, rating) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $username, $image_path, $message, $rating);
    if ($stmt->execute()) {
        // Display JavaScript alert
        echo "<script>alert('Feedback added successfully.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

