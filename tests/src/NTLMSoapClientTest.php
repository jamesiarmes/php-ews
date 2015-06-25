<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 25-6-15
 * Time: 17:23
 */

namespace jamesiarmes\PEWS\Tesst;

use jamesiarmes\PEWS\NTLMSoapClient;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use Mockery;

class NTLMSoapClientTest extends PHPUnit_Framework_TestCase {
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\NTLMSoapClient')->makePartial();
        return $mock;
    }

    public function testGetLastRequestHeaders()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\NTLMSoapClient');
        $prop = $reflection->getProperty('__last_request_headers');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(__DIR__ . '/../../Resources/wsdl/services.wsdl');

        $prop->setValue($client, array('test', 'test2'));
        $this->assertEquals("testntest2\n", $client->__getLastRequestHeaders());
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(__DIR__ . '/../../Resources/wsdl/services.wsdl');

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }
}
