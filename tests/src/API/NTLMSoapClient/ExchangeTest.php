<?php

namespace jamesiarmes\PEWS\API\NTLMSoapClient\Test;

use PHPUnit_Framework_TestCase;
use Mockery;
use jamesiarmes\PEWS\API\NTLMSoapClient\Exchange;
use ReflectionClass;
use SoapHeader;

class ExchangeTest extends PHPUnit_Framework_TestCase
{
    public function getMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API\NTLMSoapClient\Exchange')
            ->shouldDeferMissing();

        return $mock;
    }

    public function testDummy()
    {
        $this->assertTrue(true);
    }
}
