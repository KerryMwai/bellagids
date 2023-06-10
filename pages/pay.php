<?php
include("../classes/daraja_handler.php");
if(isset($_POST['pay'])){
    $consumerKey="UiJ4OZg3px5uoFJS2ErHAyKcs7mXMQT1";
    $consumerSecret="RZXvGjLkG90PGwwp";

    $businessShortCode="174379";
    $passKey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";

    $partyA=$_POST['phone'];
    $accountReference="";
    $amount=$_POST['amount'];

    $timestamp=date('YmdHis');


    $password=base64_decode($businessShortCode.$passKey.$timestamp);

    $accessTokenUrl="https://sandbox.safaricom.co.ke/0auth/vi/generate?grant_type=client_credentials";
    $initiate_url=" https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

    $callbackUrl="";

    $daraja=new DarajaApiHandler($consumerKey,$consumerSecret,$businessShortCode);
    $daraja->initiatePayment(1, $phone_number);
}