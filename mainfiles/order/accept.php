<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodSpot | Add Food Item</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/abhipray/style/userdetail.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <style>
         body {
         
         background-image: url('../abhipray/images/bg901.jpg');
      
         background-size: 100% 100%;

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
                <li class="nav-item ">
                    <a class="nav-link" href="../admindashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../about.php" target="blank">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="dropdown-item" href="#">View Transaction</a>
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

                    ?>  <span type="boolean" class="py-3" name="profile" data-toggle="tooltip" data-placement="auto" title="FoodSpot Admin Account : <?php echo $_SESSION['username'];?>">
                    <span class="w-10 h-10 rounded-full w-1/12">
            <img alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../../images/profile6.png" style="height: 40px;width:40px">
          </span></span>
          <?php
                    }

                    ?>
                    </li>

            </ul>

            <form class="form-inline my-3 my-lg-0">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php" style="color: white;text-decoration: none;"> Logout</a></button>
            </form>
        </div>
    </nav>
 <!--update  Modal -->
 <hr>
 <div class="container col-lg-6 col-my-5">
 
                <form action="" class="text-center" method="post" enctype="multipart/form-data">
                <div class="form-header">
                <h4>Accept Food Order</h4></div>
                    <?php
                    include('../foodspot_connection.php');
                    $ids=$_GET['id'];
                
                    $selectquery = "select * from ordertable where order_id=$ids";

                    $query = mysqli_query($con, $selectquery);

                    $nums = mysqli_num_rows($query);
                    while ($res = mysqli_fetch_array($query)) {
                    ?>


                        <div class="modal-body">

                            <div class="form-group">
                                <label>Order Id</label>
                                <input type="Text" name="Order_id" class="form-control" placeholder="Order id" value="<?php echo $res['order_id']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="Text" name="cname" class="form-control" placeholder="Customer_name" value="<?php echo $res['name']; ?>" required>
                            </div>
                            <?php
                    }
                    ?>
                            <div class="form-group">
                                <label>Delivery Time</label>
                                <input type="number" id="time" name="time" class="form-control" placeholder="Enter Delivery Time"  required>
                            </div>

                            <div class="form-group">
                                <label>Delivery By</label>
                                <input type="Text" name="dby" class="form-control" placeholder="Enter Delivery Person Name" required>
                            </div>

                            <div class="form-group">
                                <label>Delivery Person Contact No. </label>
                                <input type="number" name="contact" class="form-control" placeholder="Enter Contact number" required>
                            </div>
                     



                        </div>
                        <div >
                            <button type="button" class="btn btn-secondary" ><a href="customerorderdetails.php" style="color:white">Close</a></button>
                            <input type="submit" name="accept_order" class="btn btn-primary" value="Accept Order">
                        </div>
                  
                </form>

        

    
    </div>
    </div>
    <footer>
        <hr>
        <section class=" footer ">
            <div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h1 style="  font-size: 30px;">About us</h1>
                        <p>Launched in 2021, Our technology platform connects customers, restaurant partners, serving their multiple needs. </p>
                        <a href="../about.php" target="blank">Read more &rarr;</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <h1 style=" font-size: 30px;">Quick link</h1>
                        <div class=" clearfix">
                            <a href="../contact.php" style="color: white;" target="blank">

                                <p class="footer-blog-text">Contact</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../login/signup.php" style="color: white;" target="blank">

                                <p class="footer-blog-text">Signup</p>

                            </a>
                        </div>
                        <div class=" clearfix">
                            <a href="../about.php" style="color: white;" target="blank">

                                <p class="footer-blog-text">Gallery</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../login/customerlogin.php" style="color: white;" target="blank">

                                <p class="footer-blog-text">Customer Login</p>

                            </a>
                        </div>
                        <div class="clearfix last">
                            <a href="../login/adminlogin.php" style="color: white;" target="blank">

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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
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
</body>

</html>
<?php
  
include('../foodspot_connection.php');



if(isset($_POST['accept_order']))
{
    
    $order_id=$_POST['Order_id'];
    $c_name=$_POST['cname'];
    $d_time=$_POST['time'];
    $d_name=$_POST['dby'];
    $d_contact=$_POST['contact'];
    $insertquery = " insert into accept_order(`order_id`,`cname`, `time`, `d_name`, `d_contact`) values(' $order_id',' $c_name','$d_time','$d_name','$d_contact') ";

    $res = mysqli_query($con, $insertquery);
    if ($res) { 
        $_SESSION['accept']=  $order_id;
        $_SESSION['name']= $c_name ;
?>
        <script>
            {
                swal({
                    title: "Well done!",
                    text: "Order Accepted!",
                    icon: "success",
                    button: "Ok Done!",
                });
            }
        </script>
    <?php


    } else {
    ?>
        <script>
            {
                alert("data not inserted");
            }
        </script>
<?php
    }

    ?>
    <script>
        location.replace("customerorderdetails.php");
    </script>
    <?php

 
   
 
}    

?>
