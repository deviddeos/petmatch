<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="../image/tabeicon.png">

</head>

<body>
    <h2>Add Product</h2>
    <form action="addproductsonfooter.php" method="post">
        <label class="form-label" for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>
        <label class="form-label" for="link">Link:</label>
        <input class="form-control" type="text" id="link" name="link" required><br><br>
        <input class="btn btn-primary" type="submit" value="Add Product">
    </form>
    <?php
// Include database connection
include "../inc/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $link = $_POST['link'];
    
    // Prepare insert query
    $sql = "INSERT INTO products (name, link) VALUES ('$name', '$link')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert 'Product added successfully';</script>";
    } else {
        echo "<script>alert 'Error:'; " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

</body>

</html>
