<?php
include '../inc/database.php';

// Handle deletion if a POST request is made
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $message = "Record deleted successfully";
    } else {
        $message = "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}

// Fetch data from the users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Table</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .table-container {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="table-container">
    <?php if (isset($message)): ?>
      <div class="alert alert-info">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Mobile</th>
          <th>Aadhar</th>
          <th>Password</th>
          <th>City</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["aadhar"] . "</td>";
            echo "<td>" . $row["pass"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td><img src='" . $row["image"] . "' alt='Image' width='50'></td>";
            echo "<td><form method='post' action=''><input type='hidden' name='id' value='" . $row["id"] . "'><button type='submit' name='delete' class='btn btn-danger btn-sm'>Delete</button></form></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='10'>No users available</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php
$conn->close();
?>