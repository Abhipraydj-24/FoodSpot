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
    <link rel="stylesheet" href="/abhipray/style/userdetail.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
    </style>
    <style>
        body {

            background-image: url('/abhipray/images/bg901.jpg');

            background-size: 100% 100%;

            background-repeat: no-repeat;
        }
        table.table td:last-child {
    width: 600px;
}
      
        .table td{
            padding-left: 190px;
            text-align: left;
           
      
        }
        dt {
            color: #212529;
        }

        a {
            text-decoration: none !important
        }

        .footer {
            background-color: black;
            background-image: url('/abhipray/images/bg6.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 20px;
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


    <title>FoodSpot | Payment Receipt</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="/abhipray/images/logomain.png" alt="" style=" width: 180px;
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
        <form class="navbar-nav mr-sm-2 ml-5 ">
                <input class="form-control mr-sm-2 my-1 text-center" type="search" placeholder="  Search" aria-label="Search">
                <button class="btn btn-outline-success mr-sm-2 my-1 text-center" type="submit">Search</button>
            </form>
             
        </ul>      
           
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../mainfiles/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mainfiles/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./mainfiles/contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="../mainfiles/menu/menu.php">
                        Menu
                    </a>

                </li>
                <form class="form-inline my-2 my-lg-0">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }

                    ?>
                    <a href="../mainfiles/cart/cart.php" class="btn-sm btn-outline-success my-2 my-sm-0 " type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>
                <li class="nav-item">
                    <?php

                    if (isset($_SESSION['uname']) && isset($_SESSION['accept'])) {

                    ?>
                        <a class="nav-link" href="../mainfiles/order/myorder.php">My order</a>

                    <?php
                    }

                    ?>

                </li>
                <li class="nav-item mr-1 active">
                   
                        <a class="nav-link" >Payment Receipt</a>

                   

                </li>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <?php

                if (isset($_SESSION['uname']) ) {

                ?>
                    <a href="../mainfiles/login/logout2.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">Logout</a>

                <?php
                }

                ?>
            </form>


        </div>
    </nav>
    <hr>
    <H2 class="text-center py-3 " style="color:white;font-family: 'Kaushan Script', cursive;">Thank You For Ordering Food !</H2>
    <?php
    include('instamojo/Instamojo.php');

    $api = new Instamojo\Instamojo('test_5c1f6e7979cb9ca10e13e359427', 'test_d2922b7b93e5d550055e7cc35a5', 'https://test.instamojo.com/api/1.1/');
    $payid = $_GET['payment_request_id'];

    try {
        $response = $api->paymentRequestStatus($payid);
    ?>
        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Payment <b> Details :</b> </h2>
                            </div>


                        </div>
                    </div>
                    <table id="mytable" class="table table-striped table-hover table-bordered">
                    <tr>
                            <th>Amount Paid : </th>
                            <td><?= $response['purpose'] ;?></td>

                        </tr>
                        <tr>
                            <th>Payment ID : </th>
                            <td><?= $response['payments'][0]['payment_id'] ;?></td>

                        </tr>
                        <tr>
                            <th>Name: </th>
                            <td><?= $response['payments'][0]['buyer_name'] ;?></td>

                        </tr>
                        <tr>
                            <th>Email : </th>
                            <td><?= $response['payments'][0]['buyer_email'] ;?></td>

                        </tr>
                        <tr>
                            <th>Contact No. : </th>
                            <td><?= $response['phone'] ;?></td>

                        </tr>
                        <tr>
                            <th>Amount Paid : </th>
                            <td><?= $response['amount'] ;?></td>

                        </tr>
                        <tr>
                            <th>Status : </th>
                            <td><?= $response['status'] ;?></td>

                        </tr>

                        </tbody>
                    </table>
                    
                       
                                <h6 class="  text-success"><lable class="text-dark " ><b> FoodSpot</b> </lable>:<b> Please check your email for Payment Receipt.</b> </h6>
                         


                     


                </div>
            </div>
        </div>
    <?php
    } catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

    ?>

    <hr>

    <footer>
        <section class=" footer ">
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
                    <div class="col-md-4  col-sm-6">
                        <h1 style="  font-size: 30px;">Reach us</h1>
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
    <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
    <script>
        var gt = 0;
        var st = 0;
        var at = 0;
        var iPrice = document.getElementsByClassName('iPrice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal')
        var stotal = document.getElementById('stotal')
        var atotal = document.getElementById('atotal')

        function subtotal() {
            gt = 0;
            for (i = 0; i < iPrice.length; i++) {

                itotal[i].innerText = ((iPrice[i].value) * (iquantity[i].value));

                gt = gt + ((iPrice[i].value) * (iquantity[i].value));
                st = gt + 20;
                at = st;
            }
            gtotal.innerText = gt;
            atotal.value = at;
            atotal = at;
            if (gt == 0) {
                stotal.innerText = 0;
            } else {
                stotal.innerText = st;

            }
        }
        subtotal();
    </script>
</body>

</html>