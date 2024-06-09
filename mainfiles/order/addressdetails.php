<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>FoodSpot | Customer Payment Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="addressdetails.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        .footer {
            background-color: black;
            background-image: url('../abhipray/bg6.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 20px;
        }

        a {
            text-decoration: none !important
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="images\logomain.png" alt="" style=" width: 180px;
            height:180 px;
            background-size: 100%;
            position: absolute;
            top: 9px;
            left: 0px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="menu.php">Breakfast</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="menu.php">Fast Food</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="menu.php">Chinese Food</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="menu.php">Non-veg Food/Thali</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="menu.php">Pure veg-Food/Thali</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="menu.php">Ice cream/Juice/Faluda</a>

                    </div>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }

                    ?>
                    <a href="cart.php" class="btn-sm btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Log in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="customerlogin.php">Customer Log in</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="adminlogin.php">Admin Log in</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-6">
                <div class="card">
                    <div class="container py-2">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <div class="card  shadow-3">
                                    <div class="row ">
                                        <div class="col-sm-5 d-sm-block bg-image">
                                            <img src="images\foodd.jpg" alt="Sample photo" class="img-fluid" height="50">

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="card-body text-center text-black">

                                                <div class=" text-center ">
                                                    <div class="row">
                                                        <span class="header">Payment</span>
                                                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                                                    </div>
                                                    <form class=" text-center payemntform  "> <span>Cardholder's name:</span> <input placeholder="Cardholder's name"> <span>Card Number:</span> <input placeholder="0125 6780 4567 9909">
                                                        <div class="row">
                                                            <div class="col-6"><span>Expiry date:</span> <input placeholder="YY/MM"> </div>
                                                            <div class="col-6"><span>CVV:</span> <input id="cvv"> </div>
                                                        </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="header">Order Summary</div>
                            <p>2 items</p>
                            <hr>
                            <div class="row item">
                                <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/79M6pU0.png"></div>
                                <div class="col-6">
                                    <div class="row"><b>$ 26.99</b></div>
                                    <div class="row text-dark" style="font-size:12px;">Be Legandary Lipstick-Nude rose</div>
                                    <div class="row">Qty:1</div>
                                </div>
                            </div>
                            <hr>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <dl class="dlist-align">
                            <dt>Sub Total : </dt>
                            <dd class="text-right text-danger ml-3"><strong>$<b id="gtotal"></b>.00</strong></dd>
                        </dl>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Shipping and Handling:</dt>
                            <dd class="text-right text-danger ml-3">+ $20.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total :</dt>
                            <dd class="text-right text-dark b ml-3"><strong>$<b id="stotal"></b>.00</strong></dd>
                        </dl>


                        <hr> <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Place Order </a> <a href="menu.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Update Cart</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <hr>

    <footer>
        <section class=" footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style=" font-size: 30px;">About us</h1>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs.</p>
                        <a href="about.php" style="color: orange;">Read more &rarr;</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <h1 style=" font-size: 30px;">Quick link</h1>
                        <div class=" clearfix">
                            <a href="contact.php" style="color: white;">

                                <p class="footer-blog-text">Contact</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="signup.php" style="color: white;">

                                <p class="footer-blog-text">Signup</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="about.php" style="color: white;">

                                <p class="footer-blog-text">Gallery</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="customerlogin.php" style="color: white;">

                                <p class="footer-blog-text">Customer Login</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="adminlogin.php" style="color: white;">

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
                            <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p>
                            <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                            <p><i class="fa fa-envelope"></i><a>foodspot24@gmail.com</a></p>
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
</body>

</html>