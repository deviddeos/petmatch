<?php
include '../inc/database.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM rehome WHERE id = $id";
    $conn->query($delete_sql);
}

// Fetch data from the database
$sql = "SELECT * FROM rehome";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rehome Table</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../image/tabeicon.png">

</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Rehome Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Vaccination</th>
                <th>Kids</th>
                <th>Why</th>
               
                <th>City</th>
                <th>Your Name</th>
                <th>Your Email</th>
                <th>Your Mobile</th>
                <th>My Info</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $image_url = '../img/' . htmlspecialchars($row['image']);
                    $name = htmlspecialchars($row['name']);
                    $type = htmlspecialchars($row['type']);
                    $breed = htmlspecialchars($row['breed']);
                    $age = htmlspecialchars($row['age']);
                    $gender = htmlspecialchars($row['gender']);
                    $vaccination = htmlspecialchars($row['vaccination']);
                    $kids = htmlspecialchars($row['kids']);
                    $why = htmlspecialchars($row['why']);
                    $statuss = htmlspecialchars($row['statuss']);
                    $city = htmlspecialchars($row['city']);
                    $yourname = htmlspecialchars($row['yourname']);
                    $youremail = htmlspecialchars($row['youremail']);
                    $yourmobile = htmlspecialchars($row['yourmobile']);
                    $myinfo = htmlspecialchars($row['myinfo']);

                    echo "<tr>
                            <td>{$name}</td>
                            <td><img src='{$image_url}' alt='image' style='width:50px;height:50px;'></td>
                            <td>{$type}</td>
                            <td>{$breed}</td>
                            <td>{$age}</td>
                            <td>{$gender}</td>
                            <td>{$vaccination}</td>
                            <td>{$kids}</td>
                            <td>{$why}</td>
                           
                            <td>{$city}</td>
                            <td>{$yourname}</td>
                            <td>{$youremail}</td>
                            <td>{$yourmobile}</td>
                            <td>{$myinfo}</td>
                            <td><a href='rehomeedit.php?delete_id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='16'>No records found</td></tr>";
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