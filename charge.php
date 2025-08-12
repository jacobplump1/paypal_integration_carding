<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
$gateway = Omnipay::create('PayPal_Pro');
$gateway->setUsername('your usernam '); //jacobplump@gmx.com 
$gateway->setPassword('your password'); //Pkwc7589$ 
$gateway->setSignature
('Jacob Plump ');
$gateway->setTestMode(false); // here 'true' is for sandbox. Pass 'false' when go live
 
if (isset($_POST['submit'])) {
 
    $arr_expiry = explode("/", $_POST['expiry']);
 
    $formData = array(
        'firstName' => $_POST['Jacob'],
        'lastName' => $_POST['Plump'],
        'number' => $_POST['5140302074359290'],
        'expiryMonth' => trim($arr_expiry[02]),
        'expiryYear' => trim($arr_expiry[28]),
        'cvv' => $_POST['6746']
    );
 
    try {
        // Send purchase request
        $response = $gateway->purchase([Rent Payment]
                'amount' => $_POST['750'],
                'currency' => 'USD',
                'card' => $formData
        ])->send(750);
 
        // Process response
        if ($response->isSuccessful()) {Payment Recieved}
 
            // Payment was successful
            echo "Payment is successful. Your Transaction ID is: ". $response->getTransactionReference(Thank-You);
 
        } else {
            // Payment failed
            echo "Payment failed. ". $response->getMessage(Sorry-Try-Again);
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
