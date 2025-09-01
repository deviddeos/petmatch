<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehome Your Pet | Petmatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/rehome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

    <style>
        .mainwalacontainer {
            margin-top: 100px;

        }

        button {
            margin-bottom: 100px;
        }
    </style>
</head>

<body class="bg-dark">
    <?php
    include "inc/header.php";
    ?>
    <div class="container-fluid mainwalacontainer">
        <div class="row justify-content-center">
            <div class="col col-md-12 col-lg-12 bg-secondary-subtle rounded">
                <form action="rehomesave.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 col-lg-12">
                        <p class="h1 text-primary text-center my-3">Rehome a Pet</p>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6">Pet's Name?</label>
                        <input type="text" class="form-control" placeholder="please enter your pet's name..." name="rhname" required>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6"> upload Pet's image</label><br>
                        <input type="file" class="form-control" name="rhimage" required>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6">Pet's Type</label>

                        <div class="container">
                            <div class="tabs">
                                <input type="radio" id="radio-1" name="rhtype" checked="" value="cat">
                                <label class="tab" for="radio-1">Cat</label>
                                <input type="radio" id="radio-2" name="rhtype" value="dog">
                                <label class="tab" for="radio-2">Dog</label>
                                <input type="radio" id="radio-3" name="rhtype" value="cow">
                                <label class="tab" for="radio-3">Cow</label>
                                <input type="radio" id="radio-4" name="rhtype" value="bird">
                                <label class="tab" for="radio-4">Birds</label>
                                <span class="glider"></span>
                            </div>
                        </div>
                        <!-- ////////////////////////// -->
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6">Pet's Breed?</label><br>
                        <input class="form-control" type="text" placeholder="enter your pet's breed" name="rhbreed" required>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6">Age Of Your Pet?</label>

                        <div class="container">
                            <div class="tabs">
                                <input type="radio" id="radio-5" name="rhage" checked="" value="puppyhood">
                                <label class="tab" for="radio-5">Puppy</label>
                                <input type="radio" id="radio-6" name="rhage" value="adolescence">
                                <label class="tab" for="radio-6">Adolescence</label>
                                <input type="radio" id="radio-7" name="rhage" value="adulthood">
                                <label class="tab" for="radio-7">Adult</label>
                                <input type="radio" id="radio-8" name="rhage" value="senior">
                                <label class="tab" for="radio-8">Senior</label>
                                <span class="glider"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <label class="form-label h6">Pet Gender?</label>
                        <select class="form-select" name="rhgender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label h6">Select your city</label>
                            <select class="form-select" name="rhcity" required>
                                <option value="" selected>Select a city</option>
                                <option value="gorakhpur">gorakhpur</option>
                                <option value="deoria">deoria</option>
                                <option value="delhi">delhi</option>
                                <option value="mumbai">mumbai</option>
                                <option value="varanasi">varanasi</option>
                                <option value="bengaluru">bengaluru</option>
                                <option value="lucknow">lucknow</option>
                                <option value="chennai">chennai</option>
                                <option value="pune">pune</option>
                                <option value="amritsar">amritsar</option>
                                <option value="jaipur">jaipur</option>
                                <option value="hyderabad">hyderabad</option>
                                <option value="kolkata">kolkata</option>

                            </select>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label h6">Pet Vaccination?</label>
                            <select class="form-select" name="rhvaccination" required>
                                <option value="yes">Yes, pet is vaccinated</option>
                                <option value="no">No, pet is not vaccinated</option>

                            </select>

                        </div>
                        <div class="col-md-12 col-lg-12">
                            <label class="form-label h6">Pet is good with kids?</label>
                            <select class="form-select" name="rhkids" required>
                                <option value="no">Yes, pet is good with kids</option>
                                <option value="no">No, pet is not good with kids</option>

                            </select>

                            <div class="col-md-12 col-lg-12">
                                <label class="form-label h6">Why do you want to donate the pet?</label><br>
                                <input type="textarea" placeholder="please explain why do you want to donate your pet..." name="rhwhy" class="form-control">
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <label class="form-label h6">Pets info</label><br>
                                <input type="textarea" placeholder="write other important info about the pet" name="rhmyinfo" class="form-control">
                            </div>
                            <button class="btn btn-warning mx-auto d-block w-100 my-3" type="submit" name="continue">Continue</button>
                </form>
            </div>
        </div>
    </div>
    <div class="my-3">
    </div>
    <?php
    include "inc/footer.php";
    ?>
</body>

</html>