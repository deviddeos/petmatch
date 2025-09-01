<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PetMatch</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

    <style>
       .container{
            margin-top: 50px;
            
        }
        .teamm{
            height: 200px;
        }
    </style>
</head>


<?php
include "inc/header.php";
?>
   
    <!-- About Us Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4 mb-4 text-danger">About PetMatch</h2>
                    <p class="lead">PetMatch is your one-stop destination for finding the perfect pet companion.
                        Whether you're looking for a playful puppy or a cuddly kitten, we've got you covered.</p>
                    <p>We are passionate about connecting pets with loving families and creating lifelong bonds.
                        Our team works tirelessly to ensure that every match is made with care and consideration.</p>
                    <p>Join us in our mission to make the world a happier place, one pet at a time!</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4 mb-4 text-primary">Our Team</h2>
                    <div class="card-group">
                        
                        <div class="card">
                            <img src="image/rishabh.jpeg" class="card-img-top teamm" alt="Team Member 1">
                            <div class="card-body">
                                <h5 class="card-title text-warning">RISHABH SINGH</h5>
                                <p class="card-text">ROLL NO. 2314037260036</p>
                                <p class="card-text">COLLEGE.DIGVIJY NATH P.G. COLLEGE, GORAKHPUR</p> </div>
                        </div>
                       
                        <div class="card">
                            <img src="image/prince.jpg" class="card-img-top teamm" alt="Team Member 2">
                            <div class="card-body">
                                <h5 class="card-title text-warning">PRINCE GUPTA</h5>
                                <p class="card-text">ROLL NO. 2314037260029</p>
                                <p class="card-text text-dark">COLLEGE:COLLEGE.DIGVIJY NATH P.G. COLLEGE, GORAKHPUR</p>
                                
                            </div>
                        </div>
                        <div class="card">
                            <img src="image/vishal.jpg" class="card-img-top teamm" alt="Team Member 1">
                            <div class="card-body">
                                <h5 class="card-title text-warning">VISHAL TIWARI</h5>
                                <p class="card-text">ROLL NO. 2314037260049</p>
                                <p class="card-text">COLLEGE:COLLEGE.DIGVIJY NATH P.G. COLLEGE, GORAKHPUR</p></div>
                        </div>
                        
                        <div class="card">
                            <img src="image/aditya.jpg" class="card-img-top teamm" alt="Team Member 2">
                            <div class="card-body">
                                <h5 class="card-title text-warning">ADITYA YADAV</h5>
                                <p class="card-text">ROLL NO. 2314037260004</p>
                                <p class="card-text">COLLEGE:COLLEGE.DIGVIJY NATH P.G. COLLEGE, GORAKHPUR</p></div>
                        </div>
                        <!-- Add more team members here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "inc/footer.php";
?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
