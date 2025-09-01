<?php
// Start a session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Match</title>

    <!--===========Bootstrap-5.3 CDN ============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!--=============Font Awesome CDN==========-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--=========== Css style sheet link ============-->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="icon" type="image/x-icon" href="../image/tabeicon.png">

    <style>
        .nav-link {
            font-weight: bold;
        }
        .logout{
    background-color: hsl(343, 100%, 50%);
    color: #000000;
    font-size: 14px;
    padding: 8px 20px;
    border-radius: 50px;
    text-decoration: none;
    /* transition: 0.3s background-color; */
    font-weight: 600;
    outline: none;
    cursor: pointer;
    transition: .3s linear;
}
.logout:hover {
    background: transparent;
    border: 1px solid rgba(0, 0, 0, 0.592);
}
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="image/logo6.png" alt="" width="100"></a>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body align-items-center justify-content-center">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="feedback.php">Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <?php
                            if (isset($_SESSION['email'])) {
                                $welcomeMessage = isset($_SESSION['name']) ? 'Welcome, ' . $_SESSION['name'] . '!' : 'Welcome!';
                                echo '<span class="login-button me-2">' . $welcomeMessage . '</span>';
                                echo '<a class="logout" href="logout.php">Logout</a>'; // Add logout link here
                            } else {
                                echo '<a class="login-button" href="login.php">Login</a>';
                            }
                            ?>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
</body>
</html>