<?php

require_once '../vendor/autoload.php';

$email = 'presence@presence.fean.ch';
$password = '_AsrtVU6dA9_';
$username = "presence";

$auto = new EWSAutodiscover($email, $password, $username);
$auto->skipSSLVerification();
//$auto->setCAInfo('/path/to/your/cacert.pem');

/** @var \ExchangeWebServices $ews */
$ews = $auto->newEWS();

var_dump($ews);


