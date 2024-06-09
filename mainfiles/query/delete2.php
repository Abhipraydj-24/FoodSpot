<?php

include '../foodspot_connection.php';

$id= $_GET['idth'];

$deletequery=" delete from registration where id=$id ";
$query=mysqli_query($con,$deletequery);
if($query)
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
header('location:../login/usersdetails.php');


?>