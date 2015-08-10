<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use Symfony\Component\Console\Application;
use jamesiarmes\PEWS\Generator\ConvertToPHP;

error_reporting(error_reporting() &~E_NOTICE);

$cli = new Application('Convert XSD to PHP classes Command Line Interface', "2.0");
$cli->setCatchExceptions(true);
$cli->setDefaultCommand('convert:php');
$cli->addCommands(array(
    new ConvertToPHP()
));
$cli->run();
