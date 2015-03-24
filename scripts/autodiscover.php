<?php
require_once('../EWSAutodiscover.php');
require_once('../ExchangeWebServices.php');
require_once('../NTLMSoapClient.php');
require_once('../NTLMSoapClient/Exchange.php');
require_once('../EWS_Exception.php');
require_once('../EWSType.php');
spl_autoload_register(
    function ($class) {
        $class = explode('_', $class);
        if ($class[0] == 'EWSType')
            require_once $class[0] . '/' . $class[1] . '.php';
    }
);


$email = 'bastian@presence.fean.ch';
$password = '!UTY6_c}zwA+';
$username = 'bastian';

//$email = 'bastian.feder@swisscom.com';
//$password = "+BaFe778bt!";
//$username = 'taafeba2';

$auto = new EWSAutodiscover($email, $password, $username);
$auto->skipSSLVerification();
//$auto->setCAInfo('/path/to/your/cacert.pem');

/** @var \ExchangeWebServices $ews */
$ews = $auto->newEWS();

var_dump($ews);


