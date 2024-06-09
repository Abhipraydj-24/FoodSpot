<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>FoodSpot | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
    <style>
        body {

            background-image: url('../images/bg901.jpg');

            background-size: 100% 100%;

            background-repeat: no-repeat;
        }

        .footer {
            background-color: black;
            background-image: url('../images/bg6.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 20px;
        }

        a {
            text-decoration: none !important
        }

        .intro-section {
            padding-top: 60px;
            padding-bottom: 60px;

        }

        .text-center {
            text-align: center !important;
        }

        .intro-section .fa {
            width: 100px;
            height: 100px;
            line-height: 100px;
            font-size: 48px;
            color: #8b0d02;
            background-color: #fff;
            border: 3px solid #8b0d02;

        }

        .circle {
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;

            border-color: black;
        }

        .intro-section h6 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 18px;
            color: white;
        }

        .fa-glass:before {
            content: "\f000";
        }

        .fa-credit-card:before {
            content: "\f09d";
        }

        .fa-flash:before,
        .fa-bolt:before {
            content: "\f0e7";
        }

        .fa-dollar:before,
        .fa-usd:before {
            content: "\f155";
        }


        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .w-full {
            width: 100%;
        }

        .align-middle {
            vertical-align: middle;
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 10%), 0 4px 6px -2px rgb(0 0 0 / 5%);
        }

        .border {
            border-width: 3px;
            border-color: white;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .user {
            border-color: white;
            border-width: 5px;
        }
        .tooltip {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 2.0;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  /* ... */
}
        .tooltip-inner {
  max-width: 220px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
      
       
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../images/logomain.png" alt="" style=" width: 180px;
            height:180 px;
            background-size: 100%;
            position: absolute;
            top: 9px;
            left: 0px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="margin-right:auto ;">
                <form class="navbar-nav mr-sm-2 ">
                    <input class="form-control mr-sm-2 my-1 text-center" type="search" placeholder="  Search" aria-label="Search">
                    <button class="btn btn-outline-success mr-sm-2 my-1 text-center" type="submit">Search</button>
                </form>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="./menu/menu.php">
                        Menu
                    </a>

                </li>
                <form class="form-inline my-2 my-lg-0 mr-1">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }

                    ?>
                    <a href="../mainfiles/cart/cart.php" class="btn-sm btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>


                <li class="nav-item dropdown">
                    <?php

                    if (!isset($_SESSION['uname'])) {

                    ?>



                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Log in
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../mainfiles/login/customerlogin.php">Customer Log in</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../mainfiles/login/adminlogin.php">Admin Log in</a>
                        </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mainfiles/login/signup.php">Sign Up</a>
                </li>
            <?php
                    }

            ?>
            <li class="nav-item mr-2">
                <?php

                if (isset($_SESSION['uname'])) {

                ?>
                <span type="boolean" class="py-3" name="profile" data-toggle="tooltip" data-placement="auto" title="FoodSpot Account : <?php echo $_SESSION['uname'];?>">
                    <span class="w-10 h-10 rounded-full w-1/12">
                        <img type ="btn" alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../images/profile4.png" style="height: 40px;width:40px">
                    </span>
                </span>
                <?php
                }

                ?>
            </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <?php

                if (isset($_SESSION['uname'])) {

                ?>
                    <a href="./login/logout2.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">Logout</a>

                <?php
                }

                ?>
            </form>

        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>


        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/background.jpg" class="d-block w-100" alt="fastfood">
                <div class="carousel-caption d-none d-md-block">

                    <h3>
                        <p class="text-dark">" Bringing Good Food Into Your Everyday "</p>
                    </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/food678.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>
                        <p>" Good Food for Good Moments. "</p>
                    </h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/food-delivery-apps.jpg" class="d-block w-100" alt="..." style=" background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h3>
                        <p class="text-dark">" Your Favourite Food delivery Partner "</p>
                    </h3>

                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
    <div class="py-4">
        <h3 class="text-center">Our Feature</h3>
    </div>
    <section class="intro-section">

        <!-- Nested Container Starts -->
        <div class="container text-center">
            <!-- Nested Row Starts -->
            <div class="row">
                <!-- #1 Starts -->
                <div class="col-md-3 col-sm-6">
                    <i class="fa fa-flash circle"></i>
                    <h6>Lightning Fast Delivery</h6>
                </div>
                <!-- #1 Ends -->
                <!-- #2 Starts -->
                <div class="col-md-3 col-sm-6">
                    <i class="fa fa-glass circle"></i>
                    <h6>No Minimum Order</h6>
                </div>
                <!-- #2 Ends -->
                <!-- Clearfix Starts -->
                <div class="clearfix d-block d-md-none">
                    <p>&nbsp;</p>
                </div>
                <!-- Clearfix Ends -->
                <!-- #3 Starts -->
                <div class="col-md-3 col-sm-6">
                    <i class="fa fa-credit-card circle"></i>
                    <h6>Pay via Card/Cash</h6>
                </div>
                <!-- #3 Ends -->
                <!-- #4 Starts -->
                <div class="col-md-3 col-sm-6">
                    <i class="fa fa-dollar circle"></i>
                    <h6>Deals Discounts</h6>
                </div>
                <!-- #4 Ends -->
            </div>
            <!-- Nested Row Ends -->
        </div>
        <!-- Nested Container Ends -->
    </section>
    <section class="my-5">
        <div class="py-4">
            <h3 class="text-center">Our Menu </h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class=" col-lg-2 col-md-2 col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/dosa.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Breakfast</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>

                </div>
                <div class=" col-lg-2 col-md-2 col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/css2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Fastfood</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-2 col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/cc44.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Non-veg Food/Thali</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-2col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/cc33.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Pure veg-Food/Thali</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-2 col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/cc654.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Chinese Food</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-2 col-md-2 col-12">
                    <div class="card">
                        <img class="card-img-top" src="../images/cc67.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Sweet</h4>
                            <p class="card-text"></p>
                            <a href="menu.php" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <footer>
        <section class=" footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style=" font-size: 30px;">About us</h1>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs.</p>
                        <a href="../mainfiles/about.php" style="color: orange;">Read more &rarr;</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <h1 style=" font-size: 30px;">Quick link</h1>
                        <div class=" clearfix">
                            <a href="../mainfiles/contact.php" style="color: white;">

                                <p class="footer-blog-text">Contact</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../mainfiles/login/signup.php" style="color: white;">

                                <p class="footer-blog-text">Signup</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../mainfiles/about.php" style="color: white;">

                                <p class="footer-blog-text">Gallery</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../mainfiles/login/customerlogin.php" style="color: white;">

                                <p class="footer-blog-text">Customer Login</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../mainfiles/login/adminlogin.php" style="color: white;">

                                <p class="footer-blog-text">Admin Login</p>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <h1 style=" font-size: 30px;">Reach us</h1>
                        <div class="footer-social-icons">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-address">
                            <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Maharastra , India</p>
                            <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                            <p><i class="fa fa-envelope"></i>foodspot24@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="bottom" style="font-size: 18px;">
                <p style="color: white; padding: 17px 0;" align="center">
                    &copy;2021 FoodSpot .All rights reserved</p>
            </div>
        </section>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>
    <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
</body>

</html>