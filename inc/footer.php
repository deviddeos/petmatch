<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Footer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

</head>

<body>
   
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <?php
                // Include database connection
                include "database.php";

                // Query to retrieve social media links from database
                $socialMediaQuery = "SELECT * FROM social_media_links";
                $socialMediaResult = mysqli_query($conn, $socialMediaQuery);

                if (mysqli_num_rows($socialMediaResult) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($socialMediaResult)) {
                        echo '<a href="' . $row["link"] . '" class="me-4 text-reset">
                                <i class="' . $row["icon_class"] . '"></i>
                            </a>';
                    }
                } else {
                    echo "No social media links found";
                }
                ?>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>PETMATCH
                        </h6>
                        <p>
                            PETMATCH is a pet adoption website made for final year project of BCA
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <?php
                        // Query to retrieve product links from database
                        $productQuery = "SELECT * FROM products";
                        $productResult = mysqli_query($conn, $productQuery);

                        if (mysqli_num_rows($productResult) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_assoc($productResult)) {
                                echo '<p><a href="' . $row["link"] . '" class="text-reset">' . $row["name"] . '</a></p>';
                            }
                        } else {
                            echo "No products found";
                        }
                        ?>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <?php
                        
                        $usefulLinksQuery = "SELECT * FROM useful_links";
                        $usefulLinksResult = mysqli_query($conn, $usefulLinksQuery);

                        if (mysqli_num_rows($usefulLinksResult) > 0) {
                           
                            while ($row = mysqli_fetch_assoc($usefulLinksResult)) {
                                echo '<p><a href="' . $row["link"] . '" class="text-reset">' . $row["name"] . '</a></p>';
                            }
                        } else {
                            // echo "No useful links found";
                        }
                        ?>
                        
                        <!-- <p class="text-reset"><a>Home</a></p>
                        <p class="text-reset"><a>Feedback</a></p>
                        <p class="text-reset"><a>About us</a></p> -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Contact -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> GORAKHPUR, DVNDC, INDIA</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            deanambrose2111650@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +91 9794711794</p>
                        <p><i class="fas fa-print me-3"></i> + 91 7052004332</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="">PETMATCH</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>

