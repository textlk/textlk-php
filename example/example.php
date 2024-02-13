<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use TextLK\SMS;

// Set your API key and URL
$api_key = 'YOUR_API_KEY';

// Instantiate TextLK\SMS with the required arguments
$SMS = new SMS($api_key);

$data = array(
    "recipient" => "9476000000",
    "sender_id" => "TEXTLK",
    "type" => "plain",
    "message" => "Boom! Message from Text.lk"
);

echo $SMS->send($data);

// echo $SMS->getBalance();

// echo $SMS->getProfile();
