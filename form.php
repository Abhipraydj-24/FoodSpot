<?php

$username="root";
$fpassword="";
$server="localhost";
$db="harshad";

$con=mysqli_connect($server,$username,$fpassword,$db);
if($con)
{
echo "Connection Successful";

}
else{
echo "No Connection";
}


if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $insert="INSERT INTO `harshad_details`(`email`, `contact`) VALUES ('$email','$contact')";
    $result=mysqli_query($con, $insert);

    if($result){
 echo "  query is running";
    }
    else{

        echo " not running";
    }
}

?>