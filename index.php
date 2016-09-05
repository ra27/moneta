<?php
include_once(__DIR__ . "/moneta_sdk_lib/autoload.php");


$orderId = 321; 

$amount = 1000;

$paySystemTypes=[ "electronic", "bank", "card", "terminal"];

$monetaSDK = new Moneta\MonetaSdk();

$result = $monetaSDK->showChoosePaymentSystemForm($paySystemTypes);
echo $result->render;


$monetaSDK->processCleanChoosenPaymentSystem();
$result = $monetaSDK->showPaymentFrom($orderId, $amount, $currency = 'RUB',
 $description = null, $isIframe = false, $paymentSystem = null, $isRegular = false,
 $additionalData = null, $method = 'POST');
echo $result->render;


