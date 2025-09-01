<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="../image/tabeicon.png">

</head>

<body>
<div class="col-lg-6">
    <h2>Update Social Media Links</h2>
    <form action="insert_data.php" method="post">
        <label class="form-label" for="facebook">Facebook:</label>
        <input class="form-control" type="text" id="facebook" name="facebook"><br><br>
        <label class="form-label" for="twitter">Twitter:</label>
        <input class="form-control" type="text" id="twitter" name="twitter"><br><br>
        <label class="form-label" for="google">Google:</label>
        <input class="form-control" type="text" id="google" name="google"><br><br>
        <label class="form-label" for="instagram">Instagram:</label>
        <input class="form-control" type="text" id="instagram" name="instagram"><br><br>
        <label class="form-label" for="linkedin">LinkedIn:</label>
        <input class="form-control" type="text" id="linkedin" name="linkedin"><br><br>
        <label class="form-label" for="github">GitHub:</label>
        <input class="form-control" type="text" id="github" name="github"><br><br>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to MySQL database
        $conn = mysqli_connect("localhost", "root", "", "petmatch");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if all form fields are set
        if (isset($_POST['facebook'], $_POST['twitter'], $_POST['google'], $_POST['instagram'], $_POST['linkedin'], $_POST['github'])) {
            // Update social media links in the database
            $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
            $twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
            $google = mysqli_real_escape_string($conn, $_POST['google']);
            $instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
            $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
            $github = mysqli_real_escape_string($conn, $_POST['github']);

            // Update the data in the database
            $sql = "UPDATE social_media_links SET link = CASE 
                        WHEN icon_class = 'fab fa-facebook-f' THEN '$facebook'
                        WHEN icon_class = 'fab fa-twitter' THEN '$twitter'
                        WHEN icon_class = 'fab fa-google' THEN '$google'
                        WHEN icon_class = 'fab fa-instagram' THEN '$instagram'
                        WHEN icon_class = 'fab fa-linkedin' THEN '$linkedin'
                        WHEN icon_class = 'fab fa-github' THEN '$github'
                    END";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert 'Records updated successfully';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "All form fields are required.";
        }

        // Close MySQL connection
        mysqli_close($conn);
    }
    ?>
</body>

</html>