<?php

include '../foodspot_connection.php';
$selectquery="select * from contactdetails";

$query=mysqli_query($con,$selectquery);

$nums=mysqli_num_rows($query);



while($res=mysqli_fetch_array($query)){
echo $res['Name']."<br>";

}
?>
