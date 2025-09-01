<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Destination | India</title>

    <!-- CDN of Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Tab icon link -->
    <link rel="icon" type="../image/x-icon" href="icon/icon one3.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .destination {
            width: 45%;
            height: auto;
            border: 0px solid black;
            margin: auto;
            margin-top: 100px;
        }

        .destination .des-box,
        .img-box {
            position: relative;
            width: 100%;
            height: auto;
            /* border: 1px solid black; */
        }

        .des-box h4 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            color: black;
            line-height: 20px;
            letter-spacing: 1px;
        }

        .des-box p {
            font-size: 12px;
            padding: 10px 0px;
        }

        .des-box ul li {
            list-style-type: none;
            padding: 0px 0px 10px 0px;
            font-weight: 500;
            font-size: 12px;
        }

        .des-box h6 {
            width: 250px;
            font-size: 12px;
            font-weight: 500;
            margin: 20px 0px;
        }


        .destination .img-box img {
            width: 100%;
            height: 420px;
            border-radius: 10px;

        }
        .destination .img-box .msg {
            position: absolute;
            top: 50%;
            left: -10%;
            width: 160px;
            height: 50px;
            background: #fff;
            box-shadow: 0px 5px 20px gray;
            display: flex;
            align-items: center;
            padding: 0px 10px;
            border-radius: 5px;
        }
        .destination .img-box .msg:nth-child(2) {
            top: 10%;
            left: 60%;
        }
        .destination .img-box .msg img {
            width: 30px;
            height: 55%;
        }
        .destination .img-box .msg .cont {
            margin-left: 15px;
        }
        .destination .img-box .msg h4 {
            margin: 0;
            font-size: 15px;
            font-weight: 500;

        }
        .destination .img-box .msg .cont .bi:nth-child(1){
            color:red;
            margin-right: 5px;
            font-size: 13px;
        }
        .destination .img-box .msg .cont .bi span{
           font-style: normal;
           margin-left: 3px;
           font-size: 12px;
           color: gray;
        }
        .destination .img-box .msg .cont .bi:nth-child(2){
            color:rgb(112, 196, 229);
            margin-right: 5px;
            font-size: 13px;
        }
        .destination .img-box .msg .cont h6{
            margin-bottom: -0.2rem;
            
        }
        .destination .img-box .msg .cont .icon i span{
           size: 20px;
        }


    </style>
</head>

<body>
    <div class="container-fluid mb-5 shadow ">
        <div class="destination ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="des-box">
                        <h4>We are Available In</h4>
                        <p>Your Nearest City</p>
                        <ul>
                            <li>Gorakhpur</li>
                            <li>Deoria</li>
                            <li>Lucknow</li>
                            <li>Varansi</li>
                            <li>Delhi</li>
                            <li>Mumbai</li>
                            <li>Ahembdabad</li>
                            <li>Bengaluru</li>
                            <li>Hydrabaad</li>
                            <li>Chennai</li>
                            <li>Kolkata</li>
                        </ul>
                        <h6>“Pet Adoption Rocks! Don’t shop, Adopt Love!” - PetMatch</h6>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="img-box">

                        <img src="./image/12.jpg" alt="" class="d-block w-100 shadow ">
                        <div class="msg">
                            <img src="./image/location icon.png" alt="">
                            <div class="cont">
                                <h6>Gorakhpur</h6>
                                <div class="icon">
                                    <i class=" fa-solid fa-heart text-danger fa-xs"><span class="text-secondary text-sm"> 8645&nbsp</span></i>
                                    <i class="fa-solid fa-comment text-primary fa-xs"><span class="text-secondary">864</span></i>
                                </div>
                            </div>
                        </div>

                        <div class="msg">
                            <img src="./image/location icon.png" alt="">
                            <div class="cont">
                                <h6>Deoria</h6>
                                <div class="icon">
                                    <i class=" fa-solid fa-heart text-danger fa-xs"><span class="text-secondary text-sm"> 4145&nbsp</span></i>
                                    <i class="fa-solid fa-comment text-primary fa-xs"><span class="text-secondary">550</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>