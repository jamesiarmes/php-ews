<?php
/**
 * This example shows how to use the Autodiscover to attempt to discover the
 * correct host URL and settings for a Microsoft Exchange server. If
 * autodiscovery fails, you will need to determine the correct URL on your own
 * and instantiate the Client object directly.
 *
 * Autodiscovery can take several requests. For this reason, it is recommended
 * that you cache the host name and server version for future use, rather than
 * using the service for each request.
 *
 * For more information on autodiscovery, see
 * https://technet.microsoft.com/en-us/library/bb124251(v=exchg.150).aspx.
 */
require_once '../../vendor/autoload.php';

use jamesiarmes\PhpEws\Autodiscover;

// Replace these with the appropriate values.
$email = '';
$password = '';

// Simplest usage, no special options.
$client = Autodiscover::getEWS($email, $password);
