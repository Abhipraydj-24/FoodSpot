
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
    <link rel="stylesheet" href="../../style/contact.css">
    <link rel="stylesheet" href="../../style/cart.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
     body {
         
    background-image: url('/abhipray/images/bg901.jpg');

    background-size: 100% 100%;
   
    background-repeat: no-repeat;
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


    <title>FoodSpot | My Order</title>
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
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="../menu/menu.php" >
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
                    <a href="../cart/cart.php" class="btn-sm btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>
                <li class="nav-item">
                <?php
                  
                  if (isset($_SESSION['uname'])) {

                    ?>
                   <a class="nav-link active" href="../order/myorder.php">My order</a>
                    
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
                        <a class="dropdown-item" href="../login/customerlogin.php">Customer Log in</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/adminlogin.php">Admin Log in</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login/signup.php">Sign Up</a>
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
            <img alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../../images/profile4.png" style="height: 40px;width:40px">
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
                    <a href="../login/logout2.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">Logout</a>
                    
                    <?php
                    }

                    ?>
                </form>
        

        </div>
    </nav>
<hr>
<div class="container mt-3 mb-3 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="text-center logo p-2 px-5"> <img src="/abhipray/images/logomain.png" width="170" style="background-color:black; border-radius: 90px;" > </div>
                <div class="invoice p-5">
                <?php

include 'purchase.php';
$selectquery = "select * from  accept_order";


$query = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query))if(  $_SESSION['accept']==$res['order_id']){ {
?>
                    <h5 class="text-success text-center">Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4 mb-3  text-dark text-center">Hello,<?php echo $res['cname']; ?></span> <p class=" text-dark text-center ">You order has been confirmed and Cook will cook your food will be delivered in <?php echo $res['time']; ?> minutes!</p>
                    <p class=" text-dark text-center">Delivery Boy Name: <?php echo $res['d_name']; ?> / Contact Number: <?php echo $res['d_contact']; ?></p>
                    <?php
                                }            }
                        ?>




                    <div class="payment border-top mt-3 mb-3 ml-3 border-bottom table-responsive">
                    <?php

include 'purchase.php';
$selectquery = "select * from ordertable";


$query = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query))if(  $_SESSION['accept']==$res['order_id']){ {
?>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2 ml-4"> <span class="d-block text-muted">Order Date/Time</span> <span><?php echo $res['date_time']; ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2 ml-4"> <span class="d-block text-muted">Order Id</span> <span>#<?php echo $res['order_id']; ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2 ml-4"> <span class="d-block text-muted">Payment</span> <span><?php echo $res['pay_mode']; ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2 ml-4"> <span class="d-block text-muted">Delivery Address</span> <span><?php echo $res['address']; ?>/<?php echo $res['city']; ?>-<?php echo $res['pincode']; ?>/<?php echo $res['state']; ?>/<?php echo $res['country']; ?></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                                }            }
                        ?>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <?php

include 'purchase.php';
$selectquery = "select * from user_order";

$no=1;
$query = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query))if(  $_SESSION['accept']==$res['order_id']){ {
?>
                                <tr>
                                 <td><?php echo $no; ?></td>
                                    <td width="60%"> <span class="font-weight-bold"><?php echo $res['itemname']; ?></span>
                                        <div class="product-qty"> <span class="d-block">Quantity: <?php echo $res['quantity']; ?></span> <span></span> </div>
                                        <div class="price"> <span class="d-block">Price: ₹<?php echo $res['price']; ?></span> <span></span> </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">₹<?php echo $res['price'] * $res['quantity']; ?></span> </div>
                                    </td>
                                </tr>
                                <?php
                                }    $no++;        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                <?php

include 'purchase.php';
$selectquery = "select * from ordertable";

$no=1;
$query = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query))if(  $_SESSION['accept']==$res['order_id']){ {
?>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>₹<?php echo $res['total']-20; ?></span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>₹20</span> </div>
                                        </td>
                                    </tr>
                                    
                                  
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Total</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold">₹<?php echo $res['total']; ?></span> </div>
                                        </td>
                                    </tr>
                                    <?php
                                }          }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  
                    <p class="font-weight-bold mb-0 text-dark">Thanks for Ordering Food from us ! Enjoy your meal.</p> <span class="text-dark">FoodSpot Team</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#" style="color:white"> help center</a></span></div>
            </div>
        </div>
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
                        <a href="../about.php" style="color: orange;">Read more &rarr;</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <h1 style=" font-size: 30px;">Quick link</h1>
                        <div class=" clearfix">
                            <a href="../contact.php" style="color: white;">

                                <p class="footer-blog-text">Contact</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../login/signup.php" style="color: white;">

                                <p class="footer-blog-text">Signup</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../about.php" style="color: white;">

                                <p class="footer-blog-text">Gallery</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../login/customerlogin.php" style="color: white;">

                                <p class="footer-blog-text">Customer Login</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../login/adminlogin.php" style="color: white;">

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