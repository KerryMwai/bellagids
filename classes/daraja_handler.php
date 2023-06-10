<?php

class DarajaApiHandler {
    private $consumer_key;
    private $consumer_secret;
    private $shortcode;
    
    public function __construct($consumer_key, $consumer_secret, $shortcode) {
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
        $this->shortcode = $shortcode;
    }
    
    public function initiatePayment($amount, $phone_number) {
        // Include the Daraja API library or any other necessary dependencies
        
        // Generate a unique transaction ID
        $transaction_id = uniqid();
        
        // Construct the request body
        $request_body = array(
            'BusinessShortCode' => $this->shortcode,
            'Password' => base64_encode($this->shortcode.$this->consumer_key.$this->shortcode),
            'Timestamp' => date('YmdHis'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phone_number,
            'PartyB' => $this->shortcode,
            'PhoneNumber' => $phone_number,
            'CallBackURL' => 'http://example.com/callback', // Replace with your callback URL
            'AccountReference' => 'Payment_'.$transaction_id,
            'TransactionDesc' => 'Payment for goods/services',
        );
        
        // Convert the request body to JSON
        $json_body = json_encode($request_body);
        
        // Generate the access token
        $access_token = $this->generateAccessToken();
        
        // Make the API request
        $response = $this->makeAPIRequest('https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest', $json_body, $access_token);
        
        // Process the response as needed
        if ($response['ResponseCode'] == '0') {
            // Payment initiation successful
            // Redirect the user to the payment page or perform any other necessary actions
            echo 'Payment initiated successfully. Redirecting to payment page...';
        } else {
            // Payment initiation failed
            // Handle the error accordingly
            echo 'Payment initiation failed. Error: '.$response['ErrorMessage'];
        }
    }
    
    private function generateAccessToken() {
        // Make an API call to generate an access token
        // Implement the necessary code to obtain the access token from Daraja API
        
        // Return the access token
        return 'YOUR_ACCESS_TOKEN';
    }
    
    private function makeAPIRequest($url, $data, $access_token) {
        // Make an API request to Daraja API
        // Implement the necessary code to make the request and fetch the response
        
        // Return the API response as an associative array
        return array(
            'ResponseCode' => '0',
            'ResponseDescription' => 'Request processed successfully',
            'ErrorMessage' => '',
        );
    }
}
?>
