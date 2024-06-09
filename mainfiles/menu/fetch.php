<?php
include('../foodspot_connection.php');


if(isset($_POST['request'])){

    $request=$_POST['request'];
  //  echo "$request";
    $query="SELECT * FROM `fooditem` WHERE  `category`= '$request' ";
    $result=mysqli_query($con,$query);
    if($result){
       // echo "query successfull";
    }
    else{
        echo "Not successfull";
    }
   

  $count=mysqli_num_rows($result);

  
    //echo "$count";
    if($count){
      //  echo "found";
    }
    else{
        echo "Not Found";
    }
   
  


?>


<div class="container">
        <div class="row">

            <?php
        
               
            
            while ($res = mysqli_fetch_array($result)){
            ?>

                <form action="../cart/managecart.php" method="post">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $res['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title" ><?php echo $res['name']; ?></h6>
                                <p class="card-text" style="font-Size:12px"><?php echo $res['description']; ?></p>
                                <input type="hidden" name="category" value="<?php echo $res['category']; ?>">
                                <input type="hidden" name="photo" value="<?php echo $res['image']; ?>">
                                <input type="hidden" name="itemname" value="<?php echo $res['name']; ?>">
                                <input type="hidden" name="Price" value="<?php echo $res['price']; ?>">
                            </div>
                            <div class="card-footer">
                                <small >   <b> <p class="card-text text-center" class="price ">Price: ₹<?php echo $res['price']; ?></p></b> <button type="submit" name="ATC" class="btn btn-success text-center" >Add</button></small>
                            </div>
                        </div>
                    </div>
                </form>
            <?php
            
            }
            ?>


        </div>
    </div>
    <?php
    }
    ?>
  