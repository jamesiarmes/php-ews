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

    public function testConstructor()
    {
        try {
            new Exchange(__DIR__ . '/../../../../Resources/wsdl/services.wsdl', array());

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        try {
            new Exchange(__DIR__ . '/../../../../Resources/wsdl/services.wsdl', array('user' => 'testUser'));

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        try {
            new Exchange(__DIR__ . '/../../../../Resources/wsdl/services.wsdl', array('password' => 'testPassword'));

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        $exchange = new Exchange(__DIR__ . '/../../../../Resources/wsdl/services.wsdl', array(
            'user' => 'testUser',
            'password' => 'testPassword',
            'version' => 'testVersion',
            'impersonation' => 'testImpersonation'
        ));

        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient\Exchange');

        $username = $reflection->getProperty('user');
        $username->setAccessible(true);

        $password = $reflection->getProperty('password');
        $password->setAccessible(true);

//        $headers = $reflection->getProperty('__default_headers');
//        $headers->setAccessible(true);

        $this->assertEquals('testUser', $username->getValue($exchange));
        $this->assertEquals('testPassword', $password->getValue($exchange));

        $expected = new SoapHeader(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'RequestServerVersion Version="testVersion"'
        );
        $this->assertEquals($expected, $exchange->__default_headers[0]);

        $expected = new SoapHeader(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'ExchangeImpersonation',
            'testImpersonation'
        );
        $this->assertEquals($expected, $exchange->__default_headers[1]);
    }
}
