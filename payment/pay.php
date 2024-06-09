<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$price=$_POST['total'];

include('instamojo/Instamojo.php');

$api = new Instamojo\Instamojo('','' , 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Food Order Payment",
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
        "buyer_name"=>$name,
        "phone"=>$phone,
        "send_sms"=>true,
         "allow_repeated_payments"=>false,
        "redirect_url" => "http://localhost/abhipray/payment/thanku.php"
        //"webhook"=>
        ));
        $_SESSION['credit']=$response['status'];
   // print_r($response);
   $pay_url=$response['longurl'];
   header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>
