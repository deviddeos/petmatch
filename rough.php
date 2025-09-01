<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Your Love | PetMatch</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Remixicon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main-section {
            margin: 10px;
            padding: 20px;
        }

        .main-section .box h5 {
            padding: 15px;
            padding-top: 15px;

        }

        .box .btn {
            background-color: #14ff72cb;
            width: 100%;
            font-weight: 600;
        }

        .box .btn:hover {
            background-color: transparent;
            width: 100%;
            border: 1px solid black;
        }

        .card {
            width: 18rem;
            /* Adjust the width as needed */
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .card-columns {
                column-count: 5;
            }
        }

        .card:last-child {
            margin-right: 0;
            /* Remove margin from the last card */
        }

        .topcontainer {
            margin-top: 80px;
        }
    </style>
</head>

<body class="bg-dark">

    <?php
    include "inc/database.php";
    include "inc/header.php";
    // Initialize variables for filtering
    $type = isset($_GET["type"]) ? $_GET["type"] : "all";
    $city = isset($_GET["city"]) ? $_GET["city"] : "all";

    // Define pagination variables
    $results_per_page = 3;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start_from = ($page - 1) * $results_per_page;

    // Initialize SQL query
    $sql = "SELECT * FROM rehome WHERE 1";

    // Add filtering conditions based on selected values
    if ($type != "all") {
        $sql .= " AND type = '$type'";
    }

    if ($city != "all") {
        $sql .= " AND city = '$city'";
    }

    $sql .= " LIMIT $start_from, $results_per_page";

    $result = $conn->query($sql);

    ?>
    <div class="container-fluid topcontainer">
        <div class="row">
            <div class="headline text-center">
                <h1 class="text-success">Pets Available For Adoption</h1>
            </div>
            <div class="col-lg-3">
                <!-- Filtering Section -->

                <div class="d-flex my-5 justify-content-center align-items-center">
                    <form action="rough.php" method="GET" class="d-block w-100">
                        <!-- Your form content here -->
                        <span class="d-block w-100 mx-2">
                            <h5>Pet Type</h5>
                            <!-- dropend button -->
                            <select name="type" class="form-select p-2" aria-label="Default select example">
                                <option value="all" <?php if ($type == "all")
                                    echo "selected"; ?>>All Types</option>
                                <option value="cow" <?php if ($type == "cow")
                                    echo "selected"; ?>>Cow</option>
                                <option value="dog" <?php if ($type == "dog")
                                    echo "selected"; ?>>Dog</option>
                                <option value="bird" <?php if ($type == "bird")
                                    echo "selected"; ?>>Bird</option>
                                <option value="cat" <?php if ($type == "cat")
                                    echo "selected"; ?>>Cat</option>
                            </select>
                        </span>
                        <span class="d-block w-100 mx-2">
                            <h5>Search By City</h5>
                            <!-- dropend button -->
                            <select name="city" class="form-select p-2" aria-label="Default select example">
                                <option value="all" <?php if ($city == "all")
                                    echo "selected"; ?>>All Cities</option>
                                <option value="gorakhpur" <?php if ($city == "gorakhpur")
                                    echo "selected"; ?>>Gorakhpur
                                </option>
                                <option value="deoria" <?php if ($city == "deoria")
                                    echo "selected"; ?>>Deoria</option>
                                <option value="delhi" <?php if ($city == "delhi")
                                    echo "selected"; ?>>Delhi</option>
                                <option value="mumbai" <?php if ($city == "mumbai")
                                    echo "selected"; ?>>Mumbai</option>
                                <option value="varanasi" <?php if ($city == "varanasi")
                                    echo "selected"; ?>>Varanasi
                                </option>
                                <option value="bengaluru" <?php if ($city == "bengaluru")
                                    echo "selected"; ?>>Bengaluru
                                </option>
                                <option value="lucknow" <?php if ($city == "lucknow")
                                    echo "selected"; ?>>Lucknow</option>
                                <option value="chennai" <?php if ($city == "chennai")
                                    echo "selected"; ?>>Chennai</option>
                                <option value="pune" <?php if ($city == "pune")
                                    echo "selected"; ?>>Pune</option>
                                <option value="amritsar" <?php if ($city == "amritsar")
                                    echo "selected"; ?>>Amritsar
                                </option>
                                <option value="jaipur" <?php if ($city == "jaipur")
                                    echo "selected"; ?>>Jaipur</option>
                                <option value="hyderabad" <?php if ($city == "hyderabad")
                                    echo "selected"; ?>>Hyderabad
                                </option>
                                <option value="kolkata" <?php if ($city == "kolkata")
                                    echo "selected"; ?>>Kolkata</option>
                            </select>
                        </span><br>
                        <button class="btn btn-success d-block w-100" type="submit">Filter</button>

                    </form>
                </div>
            </div>
            <div class="col col-lg-9">
                <!-- Cards and Pagination -->
                <div class="row">
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                       
                            

                            echo '<div class="col-md-12 col-lg-4">';
                            echo '<div class="card h-100 my-2">';
                            // Your card content here
                            echo '<img src="img/' . $row['image'] . '" class="card-img-top" alt="Pet Image">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">Name: ' . $row['name'] . '</h5>';
                            echo '<p class="card-text">Gender:' . $row['gender'] . '<br>Age: ' . $row['age'] . '</p>';
                            echo '<hr>';
                            echo '<p>Type: <b>' . $row['type'] . '</b></p>';
                            echo '<p>Breed: <b>' . $row['breed'] . '</b></p>';
                            echo '<p>vaccination: <b>' . $row['vaccination'] . '</b></p>';
                            echo '<p><a href="contactnow.php?id=' . $row['id'] . '">Contact Now</a></p>';
                            echo '<p class="">reason for giving away: ' . $row['why'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                           
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <!-- Pagination Section -->
                <div class="col-md-12 my-3">
                    <ul class="pagination justify-content-center">
                        <?php

                        $conn = new mysqli("localhost", "root", "", "petmatch");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT COUNT(*) AS total FROM rehome";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_pages = ceil($row["total"] / $results_per_page);

                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<li class='page-item'><a class='page-link' href='rough.php?page=" . $i . "'>" . $i . "</a></li>";
                        }

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "inc/footer.php";
    ?>
</body>

</html>
