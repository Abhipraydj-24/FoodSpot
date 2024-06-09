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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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


    <title>FoodSpot | Contact</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">Contact</a>
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
                    <a href="./cart/cart.php" class="btn-sm btn-outline-success my-2 my-sm-0" type="submit" style="text-decoration:none;">My Cart (<?php echo $count ?>)</a>
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

    <hr>

    <section class="main-content contact-content">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left no-margin-top">Address</h3>
                        <div class="footer-address contact-info">
                            <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Maharastra , India</p>
                            <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                            <p><i class="fa fa-envelope"></i>foodspot24@gmail.com</p>
                        </div>
                        <br>
                        <h3 class="text-left no-margin-top">Working hours</h3>
                        <div class="contact-info text-muted">
                            <p>10:00 am to 11:00 pm on Weekdays</p>
                            <p>11:00 am to 11:30 pm on Weekends</p>
                        </div>
                        <br>
                        <h3 class="text-left no-margin-top">Follow Us</h3>
                        <div class="contact-social">
                            <div class="col-md-offset-1">


                                <div class="button">



                                    <div class="icon"><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></div>
                                    <span>Facebook</span>
                                </div>
                                <div class="button">
                                    <div class="icon"><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></div>
                                    <span>Twitter</span>
                                </div>
                                <div class="button">
                                    <div class="icon"><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></div>
                                    <span>Youtube</span>
                                </div>
                                <div class="button">
                                    <div class="icon"><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></div>
                                    <span>Instagram</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <form class="contact-form" id="contactForm" action="" method="POST">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" placeholder="Full Name" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="contact" id="number" placeholder="Contact number" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Subject" type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5" required></textarea>
                            </div>
                            <button onclick="popUp()" class="btn btn-default btn-lg btn-block" name="btn-send" id="pop">Submit Feedback</button>
                        </form>
                        <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Google map-->
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px ; border:50px; border-color:white">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203712.43435698998!2d78.93242195217401!3d21.16134839623246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2sNagpur%2C%20Maharashtra%2C%20India!5e1!3m2!1sen!2sus!4v1623995336971!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!--Google Maps-->
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









</body>

</html>
<?php

include 'foodspot_connection.php';
if (isset($_POST['btn-send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $insertquery = " insert into contactdetails(Name,Email,Contactnumber,Subject,Message) values(' $name','$email','$contact','$subject','$message') ";

    $res = mysqli_query($con, $insertquery);
    if ($res) { 
?>
        <script>
            {
                swal({
                    title: "Thank you!",
                    text: "Your Feedback Is Submited!",
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
}

?>
