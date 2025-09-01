<?php
include "../inc/database.php";
// Handle deletion if a POST request is made
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM feedback WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $message = "Record deleted successfully";
    } else {
        $message = "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}

// Fetch data from the feedback table
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Table</title>
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
          <th>Username</th>
          <th>Image</th>
          <th>Message</th>
          <th>Rating</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td><img src='" . $row["image"] . "' alt='Image' width='50'></td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row["rating"] . "</td>";
            echo "<td><form method='post' action=''><input type='hidden' name='id' value='" . $row["id"] . "'><button type='submit' name='delete' class='btn btn-danger btn-sm'>Delete</button></form></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>No feedback available</td></tr>";
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