<?php

include '../foodspot_connection.php';

$id= $_GET['idth'];

$deletequery=" delete from ordertable where order_id=$id ";
$deletequery2=" delete from user_order where order_id=$id ";
$deletequery3=" delete from accept_order where order_id=$id ";
$query=mysqli_query($con,$deletequery);
$query2=mysqli_query($con,$deletequery2);
$query3=mysqli_query($con,$deletequery3);
if($query && $query2 && $query3)
{
    ?>
    <script>
        alert("Deleted Succssfully")
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Not Deleted")
    </script>
    <?php

}
header('location:../order/customerorderdetails.php');


?>