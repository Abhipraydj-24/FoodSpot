<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>FoodSpot | Signup page</title>
    <link rel="stylesheet" href="/abhipray/style/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
    
    background-image: url('/abhipray/images/bg789.jpg');

    background-size: 100% 70%;
   
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
.img {
    background: url("/abhipray/images/users1.png") no-repeat;
    width: 55px;
    height: 55px;
    display: absolute;
    background-size: 100%;
    position: absolute;
    top: -15px;
    left: 125px;
}
        a {
            text-decoration: none !important
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
                <li class="nav-item dropdown">
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
                    <a class="nav-link active" href="signup.php">Sign Up</a>
                </li>

            </ul>
           
        
            
        </div>
    </nav>
    <?php
    if (isset($_SESSION['status'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning !</strong><?php echo $_SESSION['status'];   ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php
unset($_SESSION['status']);


    }
    ?>

    </div>
    <hr>
    <table>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <ul class="container">
                <div class="img"></div>
                <li>
                    <h2>Sign up :-</h2>
                </li>
                <li><input type="text" name="name" id="name" placeholder="Full Name" required></li>
                <li><input type="email" name="email" id="email" placeholder="Email address" required></li>
                <li><input type="text" name="contact" id="mobile" placeholder="Phone Number" required></li>


                <h5>Your Passowrd</h5>
                <li><input type="password" name="password" id="password" placeholder="********" required></li>
                <h5>Please Confirm Your Passowrd</h5>
                <li><input type="password" name="cpassword" id="passward" placeholder="********" required></li>
                <li><button name="submit" class=" btn btn-primary btn-block">Create Account</button> </li>
                <li>Already have an account?
                    <a id="fp" href="customerlogin.php">Log in</a>
                </li>
            </ul>
        </form>
    </table>

    <footer>
        <hr>
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
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    include '../foodspot_connection.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email'";
    $query = mysqli_query($con,  $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        $_SESSION['status'] = "Email Already Exist";
    } else {
        if ($password === $cpassword) {

            $insertquery = " insert into registration (name,email,contact,password,cpassword) values(' $name','$email','$contact','$pass','$cpass') ";
            $iquery = mysqli_query($con,  $insertquery);
            if ($iquery) {
               
?>
                <script>
                    {
                        swal({
                            title: "Thank you!",
                            text: "Your are registered successfully!",
                            icon: "success",
                            button: "Ok",
                        });
                    }
                </script>
            <?php
            } else {

            ?>
                <script>
                    alert('Not Inserted ');
                </script>
            <?php

            }
        } else {
            
               
                $_SESSION['status'] = 'Password are not matching';
                $_SESSION['alert'] = 'danger';
  
        }
    }
}

?>