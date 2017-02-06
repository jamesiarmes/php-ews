<?php
/**
 * This example shows how to use the Autodiscover with a custom certificate
 * authority. See the basic example for more information on autodiscovery.
 */
require_once '../../vendor/autoload.php';

use jamesiarmes\PhpEws\Autodiscover;

// Replace these with the appropriate values.
$email = '';
$password = '';
$ca_path = '/path/to/your/cacert.pem';

// Set the custom CA then attemtpy autodiscovery.
$discovery = new Autodiscover($email, $password);
$discovery->setCAInfo($ca_path);
$client = $discovery->newEWS();
