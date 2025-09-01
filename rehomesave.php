<?php
session_start();
include "inc/database.php";

// Assuming you have set session variables for your name, email, and mobile number
$yourname = $_SESSION["name"];
$youremail = $_SESSION["email"];
$yourmobile = $_SESSION["mobile"];

$rhname = $_POST["rhname"];
$rhimage = $_FILES["rhimage"]["name"];
$rhtmp = $_FILES["rhimage"]["tmp_name"];
$imagefolder = "img/" . $rhimage;

// Check if the image file is uploaded
if (move_uploaded_file($rhtmp, $imagefolder)) {
    $rhtype = $_POST["rhtype"];
    $rhbreed = $_POST["rhbreed"];
    $rhage = $_POST["rhage"];
    $rhgender = $_POST["rhgender"];
    $rhvaccination = $_POST["rhvaccination"];
    $rhkids = $_POST["rhkids"];
    $rhwhy = $_POST["rhwhy"];
    $rhcity = $_POST["rhcity"];
    $myinfo = $_POST["rhmyinfo"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO rehome (name, image, type, breed, age, gender, vaccination, kids, why, city, yourname, youremail, yourmobile, myinfo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $rhname, $rhimage, $rhtype, $rhbreed, $rhage, $rhgender, $rhvaccination, $rhkids, $rhwhy, $rhcity, $yourname, $youremail, $yourmobile, $myinfo);

    // Execute statement
    if ($stmt->execute()) {
        // Pet registered successfully
        echo "<script>alert('Pet registered successfully!');</script>";
    } else {
        // Error occurred
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
} else {
    // Failed to upload image file
    echo "<script>alert('Failed to upload image file.');</script>";
}

$conn->close();
?>
