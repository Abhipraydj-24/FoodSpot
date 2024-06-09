<?php
if (!isset($_SESSION)) {
    session_start();
}

include('../foodspot_connection.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['purchase'])  && isset($_SESSION['uname'])) {
        if (isset($_POST['pay_mode']))
         {
            $pay_mode=$_POST['pay_mode'];
         }
        if($pay_mode == 'COD'){
            $query1 = "INSERT INTO `ordertable`( `name`,`email`, `contact`, `address`, `city`, `state`, `pincode`, `country`,`total`, `pay_mode`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[country]','$_POST[total]','$pay_mode') ";
            if (mysqli_query($con, $query1)) {
                $orderid = mysqli_insert_id($con);
                $query2 = "INSERT INTO `user_order`(`order_id`, `itemname`, `price`, `quantity`) VALUES (?,?,?,?)";
                $stmt = mysqli_prepare($con, $query2);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "isii", $orderid, $itemname, $price, $quantity);
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $itemname = $value['Itemname'];
                        $price = $value['Price'];
                        $quantity = $value['Quantity'];
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);
                    echo "
                          <script>alert('Order Placed');
                                      window.location.href='../menu/menu.php';
                                  </script>";
                } else {
                    echo "
                    <script>alert('Query is not Prepared');
                                window.location.href='../cart/cart.php';
                            </script>";
                }
            }
        }
        if($pay_mode == 'Pay Online'){
            include('../../payment/pay.php');
          
          if($_SESSION['credit']){
            $query4 = "INSERT INTO `ordertable`( `name`,`email`, `contact`, `address`, `city`, `state`, `pincode`, `country`,`total`, `pay_mode`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[country]','$_POST[total]','$pay_mode') ";
            if (mysqli_query($con, $query4)) {
                $orderid = mysqli_insert_id($con);
                $query5 = "INSERT INTO `user_order`(`order_id`, `itemname`, `price`, `quantity`) VALUES (?,?,?,?)";
                $stmt = mysqli_prepare($con, $query5);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "isii", $orderid, $itemname, $price, $quantity);
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $itemname = $value['Itemname'];
                        $price = $value['Price'];
                        $quantity = $value['Quantity'];
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);
                    echo "
                          <script>alert('Order Placed');
                                      window.location.href='../menu/menu.php';
                                  </script>";
                } else {
                    echo "
                    <script>alert('Query is not Prepared');
                                window.location.href='../cart/cart.php';
                            </script>";
                }
            }

          }

        }

         else {

            echo "
    <script>alert('Query is not runing');
                window.location.href='../cart/cart.php';
            </script>";
        }
    }

    if (!isset($_SESSION['uname'])) {

        $_SESSION['show'] = 'Login first ! You can not order food without login.';
        $_SESSION['alert'] = 'danger';
?>
        <script>
            location.replace("../cart/cart.php");
        </script>
<?php
    }
}




?>