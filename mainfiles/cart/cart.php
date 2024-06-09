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
    <link rel="stylesheet" href="/abhipray/style/contact.css">
    <link rel="stylesheet" href="/abhipray/style/cart.css">
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


    <title>FoodSpot | Cart</title>
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
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="../menu/menu.php" >
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
                    <a href="" class="btn-sm btn-outline-success my-2 my-sm-0 active" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>
                <li class="nav-item mr-1">
                <?php
                  
                  if (isset($_SESSION['uname']) &&isset( $_SESSION['accept'])) {

                    ?>
                   <a class="nav-link" href="../order/myorder.php">My order</a>
                    
                    <?php
                    }

                    ?>
                   
                </li>
                <li class="nav-item">
                    <?php

                    if (isset($_SESSION['uname']) && isset($_SESSION['credit']) ) {

                    ?>
                        <a class="nav-link" href="http://localhost/abhipray/payment/thanku.php" >Payment Receipt</a>

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
    <?php
    if (isset($_SESSION['show'])) {
    ?>
        <div class="alert alert-<?php echo $_SESSION['alert']; ?> alert-dismissible fade show" role="alert">
            <strong>Warning !</strong> <?php echo $_SESSION['show']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['show']);
    }


    ?>

    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted text-center">
                                <tr class="small text-uppercase">
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Food Item Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <?php


                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $no = $key + 1;


                                        echo "
                         <tr>
                         <td>$no</td>
                         <td><img src='$value[photo]' width='100' height='100'></td>
                     
                         <td> $value[Itemname]</td>
                        
                         <td>₹$value[Price] <input type='hidden' class='iPrice' value='$value[Price]' ></td>
                         <td>  <form action='managecart.php' method='post'>
                         <input class='text-center iquantity' name='modquantity' onchange='this.form.submit();' type='number' min='1' value='$value[Quantity]' max='30'>
                         <input type='hidden' name='itemname' value='$value[Itemname]' >
                         </form></td>
                         <td class='itotal'>  </td>
                         <td>  
                         <form action='managecart.php' method='post'>
                         <button name='removeitem' class='btn-sm btn-outline-danger my-2 my-sm-0' type='submit'>Remove</button>
                         <input type='hidden' name='itemname' value='$value[Itemname]' >
                         </form>
                         </td>
                         </tr>
                         
                         
                       
                         
                         
                         
                         
                         ";
                                    }
                                }

                                ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label class="text-dark">Have coupon?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="coupon" placeholder="Coupon code"> <span class="input-group-append"> <button type="submit" class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <dl class="dlist-align">
                            <dt>Sub Total : </dt>
                            <dd class="text-right text-danger ml-3"><strong>₹<b id="gtotal"></b>.00</strong></dd>
                        </dl>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Shipping and Handling:</dt>
                            <dd class="text-right text-danger ml-3">+ ₹20.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total :</dt>
                            <dd class="text-right text-dark b ml-3"><strong>₹<b id="stotal"></b>.00</strong></dd>
                           
                        </dl>

                        <a href="../menu/menu.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Update Cart</a>
                    </div>
                </div>

                <div class="card mb-3">

                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

                    ?>
                        <div class="card-body">
                            
                            <form class="text-dark" action="../order/purchase.php" method="POST"> 
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" value=""required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="Number" class="form-control" name="contact" placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="Text" class="form-control" name="address" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <label>City / Town</label>
                                    <input type="text" class="form-control" name="city" placeholder="City / Town" required>
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state" placeholder="State" required>
                                </div>
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" placeholder="Country" required>
                                </div>
                                <div class="form-group">
                               
                                <input type="hidden" class="form-control" name="total" value="" id="atotal" >
                                </div>
                                <dl class="dlist-align">
                                    <dt>Select Payment Mode :</dt>

                                </dl>
                                <div class="custom-control custom-radio text-dark">
                                    <input type="radio" id="customRadio1" value="COD" name="pay_mode" class="custom-control-input" required>
  
                                    <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                                </div>
                                <div class="custom-control custom-radio text-dark">
                                    <input type="radio" id="customRadio2" value="Pay Online" name="pay_mode" class="custom-control-input" <?php $_SESSION['PO']="Pay Online" ?>>
                                  
                                    <label class="custom-control-label" for="customRadio2">Pay Online</label>
                                </div>
                               <hr> <button class="btn btn-out btn-primary btn-square btn-main" data-abc="true" name="purchase"> Place Order </button>
                            </form>
                        </div>

                    <?php
                    }

                    ?>
            </aside>
        </div>
    </div>
    <hr>

    <footer>
        <section class=" footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style="  font-size: 30px;">About us</h1>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs. </p>
                        <a href="../about.php">Read more &rarr;</a>
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
    <script>
        var gt = 0;
        var st = 0;
        var at=0;
        var iPrice = document.getElementsByClassName('iPrice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal')
        var stotal = document.getElementById('stotal')
        var atotal = document.getElementById('atotal')
        function subtotal() {
            gt = 0;
            for (i = 0; i < iPrice.length; i++)
             {

                itotal[i].innerText = ((iPrice[i].value) * (iquantity[i].value));

                gt = gt + ((iPrice[i].value) * (iquantity[i].value));
                st = gt + 20;
                at=st;
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
 <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>









</body>

</html>
