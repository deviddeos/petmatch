<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Match</title>

    <!--===========Bootstrap-5.3 CDN ============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--===========Remixicon CDN ============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--=============Font Awesome CDN==========-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* Custom CSS */
        .carousel-item img {
            max-height: 300px;
            margin: auto;
        }

        .instruction h6 {
            color: red;
        }
        .instruction div li {
            font-size: 20px;
            font-weight: 600;
        }
        .imageofdapet{
            height: 250px;
        }
    </style>

</head><body>
    <?php
    session_start();
    include "inc/database.php"; // Include your database connection file

   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the "rehome" table
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    if ($id != "") {
        $sql = "SELECT * FROM rehome WHERE id = $id";
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Fetch data and store it in the $row variable
            $row = $result->fetch_assoc();
        } else {
            echo "Pet not found";
        }
    } else {
        echo "Invalid request";
    }

    // Close the database connection
    $conn->close();
    ?>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="container">
                <!-- Display pet name -->
                <h1 class="text-center">Name: <?php echo $row['name']; ?></h1>

                <!-- Display pet image -->
                <div>
                    <img src="img/<?php echo $row['image']; ?>" class="imageofdapet" alt="Pet Image">
                </div>

                <!-- Facts about the pet -->
                <h2 class="mt-5">Facts about me</h2>
                <ul>
                    <li>Age: <?php echo $row['age']; ?></li>
                    <li>Breed: <?php echo $row['breed']; ?></li>
                    <li>Gender: <?php echo $row['gender']; ?></li>
                    <li>Vaccinated: <?php echo $row['vaccination']; ?></li>
                </ul>

                <!-- Additional information about the pet -->
                <h2 class="mt-5">My Info</h2>
                <p><?php echo $row['myinfo']; ?></p>
                <!-- PetMatch instructions -->
                <hr style="border: 2px solid black;">
                <div class="instruction border p-5 shadow ">
                    <h6>*PetMatch does not ask for money for any adoption listed on the website.</h6>
                    <h6>*Please do not make any payment for transportation, vaccination, etc., of pets in advance.</h6>
                    <h6>*Only make any payment upon the arrival of the pet at your location.</h6>
                    <h6>*Please report to the PetMatch Support Team if anyone asks for money before making any payment.</h6>
                    <hr style="border: 1px solid black;">
                    <div>
                        <!-- Contact information -->
                        <h2 class="mt-5">Contact Info</h2>
                        <ul>
                            <li>Name: <?php echo $row['yourname']; ?></li>
                            <li>Email: <?php echo $row['youremail']; ?></li>
                            <li>Mobile no: <?php echo $row['yourmobile']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

