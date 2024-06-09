<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/contact.css">
    <script src="../Javascript/about.js"></script>
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
            text-decoration: none !important;
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
.user{
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


    <title>FoodSpot | About us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img  src="../images/logomain.png"  alt="" style=" width: 180px;
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
                <input class="form-control mr-md-2 my-1 my-sm-1 text-center" type="search" placeholder="  Search" aria-label="Search">
                <button class="btn btn-outline-success mr-sm-2 my-1 my-md-1 text-center" type="submit">Search</button>
            </form>
             
        </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="./menu/menu.php" >
                        Menu
                    </a>
                   
                </li>
                <form class="form-inline my-2 mr-1 my-lg-0">
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
                     <li  class="nav-item mr-2">
                    <?php
                  
                  if (isset($_SESSION['uname'])) {

                    ?>
                    <span type="boolean" class="py-3" name="profile" data-toggle="tooltip" data-placement="auto" title="FoodSpot Account : <?php echo $_SESSION['uname'];?>">
                    <span class="w-10 h-10 rounded-full w-1/12">
            <img alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../images/profile4.png" style="height: 40px;width:40px">
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
                    <a href="login/logout2.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">Logout</a>
                    
                    <?php
                    }

                    ?>
                </form>
        
        </div>
    </nav>
    <section class=" videoframe">


        <!--Carousel Wrapper-->
        <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
               

            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="carousel-item active">
                    <!--Mask color-->
                    <div class="view">
                        <!--Video source-->
                        <video class="video-fluid" autoplay loop muted>
                            <source src="../video/add.mp4" type="video/mp4" />
                        </video>
                        <div class="mask rgba-indigo-light"></div>
                    </div>

                    <!--Caption-->
                    <div class="carousel-caption">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">Lightning-Fast Delivery</h3>
                        </div>
                    </div>
                    <!--Caption-->
                </div>
                <!-- /.First slide -->

               

            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--Carousel Wrapper-->
    </section>
    <hr>

    <section class="my-5">
        <div class="py-4">
            <h2 class="text-center" style=" font-size: 40px"> About us </h2>
        </div>
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="../images/cc11.jpg" class="img-fluid aboutimg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="py-2">" Never have a bad meal "</h2>
                    <p class="py-2" style="color:rgb(160, 160, 160)">Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs. Customers use our platform to order their food from restaurants, order food delivery and make payments. On the other hand, we provide restaurant partners with industry-specific marketing tools which enable them to engage and acquire customers to grow their business while also providing a reliable and efficient last mile delivery service. We also operate a one-stop procurement solution, Hyperpure, which supplies high quality ingredients and kitchen products to restaurant partners.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-4">
            <h2 class="text-center" style=" font-size: 40px"> Our Vision </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" style="padding-top:10px">

                    <div class="card">
                        <img class="card-img-top" src="../images/cc90.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black" )>Driving the force of assortment</h5>
                            <p class="card-text" style="color:black">
                                For over a decade now, we’ve been empowering our users in discovering new tastes and experiences across countries. By putting together meticulous information for our users, we enable them to make an informed choice</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" style="padding-top:10px">

                    <div class="card">
                        <img class="card-img-top" src="../images/cc89.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black">Focusing on affordability
                            </h5>
                            <p class="card-text" style="color:black">The benefits of providing an interesting choice are embodied by the success of our service. We are leaving no stone unturned when it comes to making food more affordable without compromising on the profitability of a given restaurant.



                            </p>

                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-4 col-12" style="padding-top:10px">

                    <div class="card">
                        <img class="card-img-top" src="../images/cc66.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black">Improving quality of food</h5>
                            <p class="card-text" style="color:black">We are committed to nurturing a neutral platform and are helping food establishments maintain high standards through Hyperpure. Food Hygiene Ratings is a coveted mark of quality among our restaurant partners</p>

                        </div>
                    </div>


                </div>
            </div>

        </div>

    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center" style=" font-size: 40px"> Gallery </h2>
        </div>
        <div class="container-fluid">

            <div class="row">


                <div class="cube-container col-lg-4 col-md-4 col-12">

                    <div class="cube initial-position">

                        <img class="cube-face-image image-1" src="../images/cc1.jpg">

                        <img class="cube-face-image image-2" src="../images/cc2.jpg">

                        <img class="cube-face-image image-3" src="../images/cc4.jpg">

                        <img class="cube-face-image image-4" src="../images/cc5.jpg">

                        <img class="cube-face-image image-5" src="../images/cc6.jpg">

                        <img class="cube-face-image image-6" src="../images/css2.jpg">

                    </div>

                </div>



                <div class="image-buttons col-lg-4 col-md-4 col-12">


                    <input type="image" class="show-image-1" src="../images/cc1.jpg"></input>

                    <input type="image" class="show-image-2" src="../images/cc2.jpg"></input>

                    <input type="image" class="show-image-3" src="../images/cc4.jpg"></input>

                    <input type="image" class="show-image-4" src="../images/cc5.jpg"></input>

                    <input type="image" class="show-image-5" src="../images/cc6.jpg"></input>

                    <input type="image" class="show-image-6" src="../images/css2.jpg"></input>

                </div>
            </div>

        </div>

    </section>



    <hr>
    <footer>
        <section class="footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style="  font-size: 30px;">About us</h1>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs. </p>
                        <a href="../mainfiles/about.php">Read more &rarr;</a>
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
                    <div class="col-md-4  col-sm-6 flex">
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