<?php


include('foodspot_connection.php');


if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $insertquery = "insert into  admindata( username,password) values(' $username',' $password ')";

    $query = mysqli_query($con, $insertquery);

    if ($query) {
    ?>
        <script>
            alert('Inserted');
        </script>
    <?php

    } else {  
        
    ?>
        <script>
            alert('Not Inserted');
        </script>
     <?php
    }
    ?>
    <script>
        location.replace("newadmin.php");
    </script>
    <?php
}


?>