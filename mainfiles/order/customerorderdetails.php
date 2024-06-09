<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodSpot |Customer Order Details</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/abhipray/style/userdetail.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            padding-top: -110px;
            padding-bottom: -10px;
            background-image: url('/abhipray/images/bg901.jpg');
            background-position-y: 15px;
            background-size: 100% 60%;

            background-repeat: no-repeat;
        }

        .footer {
            background-color: black;
            background-image: url('/abhipray/images/bg6.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 20px;
        }

        a {
            text-decoration: none !important
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../admindashboard.php" >Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../about.php" target="blank">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Administration
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../order/customerorderdetails.php">Meal Order Report</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/usersdetails.php">Registered Customer Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../menu/addfood.php">Add Food Item</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../feedback.php">Customer Feedback Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="transaction.php">View Transaction</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="newadmin.php">Add New Admin</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="changepass.php">Change Password</a>


                    </div>
                </li>
                <li  class="nav-item mr-2">
                    <?php
                  
                  if (isset($_SESSION['username'])) {

                    ?>
                     <span type="boolean" class="py-3" name="profile" data-toggle="tooltip" data-placement="auto" title="FoodSpot Admin Account : <?php echo $_SESSION['username'];?>">
                    <span class="w-10 h-10 rounded-full w-1/12">
            <img alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../../images/profile6.png" style="height: 40px;width:40px">
          </span>
          </span>
          <?php
                    }

                    ?>
                    </li>


            </ul>

            <form class="form-inline my-3 my-lg-0">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="../login/logout.php" style="color: white;text-decoration: none;"> Logout</a></button>
            </form>
        </div>
    </nav>

    <hr>
    <div class="container col-lg-12 " style="margin:15px;">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Customer Meal Order/ <b>Details</b></h2>
                        </div>

                    </div>
                </div>
                <table id="mytable" class="table table-striped table-hover table-bordered ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name <i class="fa fa-sort"></i></th>
                            <th>Order</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Order Date/Time</th>
                            <th>Total Payment</th>
                            <th>Order Address</th>
                            <th>Pay Mode</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include '../order/purchase.php';
                        $selectquery = "select * from ordertable";


                        $query = mysqli_query($con, $selectquery);


                        $nums = mysqli_num_rows($query);
                        while ($res = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <th><?php echo $res['order_id']; ?></th>
                                <input type='hidden' class='order_id' value='<?php echo $res['order_id']; ?>'>
                                <td><?php echo $res['name']; ?></td>
                                <td>
                                    <table id="mytable" class="table table-striped table-hover tabel-border">
                                        <thead>
                                            <tr>

                                                <th>Itemname</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Sub total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $selectquery2 = "select * from user_order where order_id=$res[order_id]";
                                            $query2 = mysqli_query($con, $selectquery2);
                                            $nums2 = mysqli_num_rows($query2);
                                            while ($res2 = mysqli_fetch_array($query2)) {  ?>
                                                <tr>
                                                    <td><?php echo $res2['itemname']; ?></td>
                                                    <td><?php echo $res2['quantity']; ?>
                                                        <input type='hidden' class='iquantity' value='<?php echo $res2['quantity']; ?>'>
                                                    </td>

                                                    <td><?php echo $res2['price']; ?>
                                                        <input type='hidden' class='iPrice' value='<?php echo $res2['price']; ?>'>
                                                    </td>
                                </td>
                                <td class='itotal'> </td>
                            </tr>
                        <?php
                                            }
                        ?>


                    </tbody>



                </table>

                </td>
                <td><?php echo $res['contact']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['date_time']; ?></td>
                <td><strong>₹<b><?php echo $res['total']; ?></b>.00</strong>
              
                </td>
                <td><?php echo $res['address']; ?>/<?php echo $res['city']; ?>-<?php echo $res['pincode']; ?>/<?php echo $res['state']; ?>/<?php echo $res['country']; ?></td>
                <td><?php echo $res['pay_mode']; ?></td>
                 <td class='text-center'>
                 <a href="../order/accept.php?id=<?php echo $res['order_id']; ?>" class="accept" title="Accept Order" data-toggle="tooltip"><i class="material-icons" aria-hidden="true" style="color:darkgreen">&#x2714;</i></a>

                    <a href="../query/delete5.php?idth=<?php echo $res['order_id']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                    </tr>
                <?php

                        }
                ?>


                </tbody>
                </table>


            </div>
        </div>
    </div>
    <footer>
        <hr>
        <section class=" footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style="  font-size: 30px;">About us </h1>
                        <a href="../about.php" target="blank">Read more &rarr;</a>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs. </p>
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                "lengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                ]

            });
        });
    </script>
     <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
    <script>
        var gt = 0;
        var st = 0;
        var order_id = document.getElementsByClassName('order_id');
        var order_id2 = document.getElementsByClassName('order_id2');
        var iPrice = document.getElementsByClassName('iPrice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');

        var stotal = document.getElementById('stotal')

        function subtotal() {
            gt = 0;
          
            for (i = 0; i < iPrice.length; i++) {
                if(order_id){
                itotal[i].innerText = ((iPrice[i].value) * (iquantity[i].value));

                gt = gt + ((iPrice[i].value) * (iquantity[i].value));
                st = gt + 20;
                }
            }

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