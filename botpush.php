<?php



require "vendor/autoload.php";

$access_token = 'MloKFis8kK2PNTylCmB7AzoW8kD1Qo3/6OM1IqFTaW9oCNWE3Qf1dYZCIdkt1zLGSlEMTtrcolrwc2XxhYC7+TXtxIW8v1glTRsOEUDQHkD+VHI60fXSriTpz1RkMgiLde3zEXu6R4sGVgQY9xjAUwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '56806e89aecee6d852c3b3bd0e0a8edf';

$pushID = 'U085f83e16a15b1a0d027c25326c6dfa7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







