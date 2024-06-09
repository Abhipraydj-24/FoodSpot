<?php

$username="root";
$fpassword="";
$server="localhost";
$db="foodspot";

$con=mysqli_connect($server,$username,$fpassword,$db);
if($con)
{
//echo "Connection Successful";
}
else{
echo "No Connection";
}

?>