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

    <link rel="stylesheet" href="/abhipray/style/menu.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    body {

        background-image: url('/abhipray/images/bg901.jpg');
     
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

        .card-footer .btn {
            height: 30px;
            width: 170px;
            margin-left: -5px;
            margin-right: -5px;
            margin-top: 5px;
         
        }
        .select {
 background-color: whitesmoke;
  display:flex;
 
  border: none;
  position:relative;
  width:250px;
 
    cursor: pointer;
  display: block;
  height:40px;
}
.option{
    padding: 5px;
}
.selectcontainer{
    justify-content: center;
    padding-left: 550px;
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



    <title>FoodSpot | Menu</title>
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
        <form class="navbar-nav mr-sm-2 ">
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
                    <a class="nav-link active" >
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
                    <a href="../cart/cart.php" class="btn-sm btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
                </form>
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
            <img alt="..." class="w-full rounded-full align-middle border-500 shadow-lg user" src="../..//images/profile4.png" style="height: 40px;width:40px">
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
    <div class="selectcontainer">
    <form method="post">
       
            <div class="col-md-3 col-12 ">
                <div class="form-group" id="filter">
                    <select class="select"  name="fetchval" id="fetchval">
                        <option  class="option" value="" disabled="" selected=""><label>Select Category</label></option>
                        <option  class="option" value=" Breakfast"><label>Breakfast</label></option>
                        <option  class="option" value=" Fast Food"><label>Fast Food</label></option>
                        <option  class="option" value=" Chinese Food"><label>Chinese Food</label></option>
                        <option  class="option" value=" Pure-Veg Food / Thali"><label  >Pure-Veg Food / Thali</label></option>
                        <option  class="option" value=" Non-Veg Food / Thali"><label  >Non-Veg Food / Thali</label></option>
                        <option class="option" value=" Sweet"><label >Sweet</label></option>


                    </select>
                </div>
            </div>


     
    </form>
      </div>

    <div class="container">
        <div class="row">

            <?php

            include '../foodspot_connection.php';
            $selectquery = "select * from fooditem ";


            $query = mysqli_query($con, $selectquery);

            $nums = mysqli_num_rows($query);
            while ($res = mysqli_fetch_array($query)) {
            ?>

                <form action="../cart/managecart.php" method="post">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $res['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $res['name']; ?></h6>
                                <p class="card-text" style="font-Size:12px"><?php echo $res['description']; ?></p>
                                <input type="hidden" name="category" value="<?php echo $res['category']; ?>">
                                <input type="hidden" name="photo" value="<?php echo $res['image']; ?>">
                                <input type="hidden" name="itemname" value="<?php echo $res['name']; ?>">
                                <input type="hidden" name="Price" value="<?php echo $res['price']; ?>">
                            </div>
                            <div class="card-footer">
                                <small> <b>
                                        <p class="card-text text-center" class="price ">Price: ₹<?php echo $res['price']; ?></p>
                                    </b> <button type="submit" name="ATC" class="btn btn-success text-center">Add</button></small>
                            </div>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>


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
    <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#fetchval").on('change', function() {
                var value = $(this).val();
                //alert(value);

                $.ajax({
                    url: "fetch.php",
                    type: "POST",
                    data: "request=" + value,
                    beforeSend: function() {
                        $(".container").html("<span>Working...</span>");
                    },
                    success: function(data) {
                        $(".container").html(data);
                    }
                });
            });
        });
    </script>
<script>
$(document).ready(function() {
  
  $(".selLabel").click(function () {
    $('.dropdown1').toggleClass('active');
  });
  
  $(".dropdown-list1 li").click(function() {
    $('.selLabel').text($(this).text());
    $('.dropdown1').removeClass('active');
    $('.selected-item p span').text($('.selLabel').text());
  });
  
});</script>
</body>

</html>