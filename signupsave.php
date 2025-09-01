<?php
// Connect to the database 
include"inc/database.php";
// Retrieve form data
$name = $_POST["uname"];
$email = $_POST["uemail"];
$address = $_POST["uaddress"];
$mobile = $_POST["umobile"];
$aadhar = $_POST["uaddhar"];
$pass = $_POST["upassword"];
$city = $_POST["ucity"];
$image = $_FILES['uimage']['name']; // Handle file uploads
    $imagetmp = $_FILES['uimage']['tmp_name'];

    $imagefolder="img/".$image;

    move_uploaded_file($imagetmp, $imagefolder);



// Insert data into the database
$sql = "INSERT INTO users (name, email, address, mobile, aadhar, pass, city, image)
        VALUES ('$name', '$email', '$address', '$mobile', '$aadhar', '$pass', '$city', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert ('User registered successfully!')</script>";
    header('login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

