<?php

include('../foodspot_connection.php');


if(isset($_POST['save']))
{
    
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $image=$_FILES['image'];

  //  print_r( $image);
  $filename=$image['name'];
  $filepath=$image['tmp_name'];
  $fileerror=$image['error'];

  if($fileerror==0)
  {
      $destfile='../../upload/'.$filename;
 
     
     move_uploaded_file($filepath,$destfile);

     $insertquery="insert into  fooditem( name, price, category, description, image) values('$name',' $price',' $category','$description',' $destfile')";
    
     $query=mysqli_query($con,$insertquery);

       if($query)
       {
        ?>
        <script>
            alert('Inserted');
        </script>
        <?php
        
       }else{  ?>
        <script>
            alert('Not Inserted');
        </script>
        <?php
        }
        ?>
        <script>
     location.replace("../menu/addfood.php");
        </script>
        <?php
  }
}

?>