<?php
session_start();






if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['ATC'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'Itemname');

            if (in_array($_POST['itemname'], $myitems)) {

                echo "<script>
                alert('Item already added');
                window.location.href='../menu/menu.php';
            </script>";
            }
            else
            {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Itemname' => $_POST['itemname'], 'Price' => $_POST['Price'], 'Quantity' => 1,'photo' => $_POST['photo']);
            echo "<script>
            alert('Item added');
            window.location.href='../menu/menu.php';
        </script>";
    }
        } 
        else {
            $_SESSION['cart'][0] = array('Itemname' => $_POST['itemname'], 'Price' => $_POST['Price'], 'Quantity' => 1,'photo' => $_POST['photo']);

            echo "<script>
        alert('Item added');
        window.location.href='../menu/menu.php';
    </script>";
        }
    }
    if(isset($_POST['removeitem']))
    {
        foreach($_SESSION['cart'] as $key => $value )
        {
            if($value['Itemname']==$_POST['itemname'])
            {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo "<script>
          alert('Item Removed');
          window.location.href='../cart/cart.php';
      </script>";
          
        }
        }
    }
    if(isset($_POST['modquantity']))
     {
        foreach($_SESSION['cart'] as $key => $value )
        {
            if($value['Itemname']==$_POST['itemname'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['modquantity'];
                //print_r($_SESSION['cart']);
                echo "<script>
         // alert('Quanitity increased');
          window.location.href='../cart/cart.php';
      </script>";
            }
        }
    }
    if(isset($_POST['modquantity']))
    {
       foreach($_SESSION['cart'] as $key => $value )
       {
           if($value['Itemname']==$_POST['itemname'])
           {
               $_SESSION['cart'][$key]['Quantity']=$_POST['modquantity'];
               //print_r($_SESSION['cart']);
               echo "<script>
         alert('Quanitity increased');
         window.location.href='../cart/cart.php';
     </script>";
           }
       }
   }
}
?>