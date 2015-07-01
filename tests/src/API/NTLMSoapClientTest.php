<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 25-6-15
 * Time: 17:23
 */

namespace jamesiarmes\PEWS\API\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use jamesiarmes\PEWS\API\NTLMSoapClient;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use Mockery;
use GuzzleHttp\Middleware;

class NTLMSoapClientTest extends PHPUnit_Framework_TestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API\NTLMSoapClient')->shouldDeferMissing();
        return $mock;
    }

    public function testGetClient()
    {
        $mock = $this->getClientMock();

        $this->assertInstanceOf('GuzzleHttp\Client', $mock->getClient());
    }

    public function testDoRequest()
    {
        $mock = $this->getClientMock();

        $responseQue = new MockHandler([
            new Response(200),
            new Response(400)
        ]);

        $container = [];
        $history = Middleware::history($container);

        $handler = HandlerStack::create($responseQue);
        $handler->push($history);

        $client = new Client(['handler' => $handler, 'http_errors' => false]);

        $mock->shouldReceive('getClient')->andReturn($client);

        $mock->__doRequest('testContent', 'testLocation', 'testAction', 'testVersion');
        $this->assertEquals(200, $mock->getResponseCode());

        $mock->__doRequest('testContent', 'testLocation', 'testAction', 'testVersion');
        $this->assertEquals(400, $mock->getResponseCode());

        $this->assertEquals('testAction', $container[0]['request']->getHeaders()['SOAPAction'][0]);
    }

    public function testGetLastRequestHeaders()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient');
        $prop = $reflection->getProperty('__last_request_headers');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl');

        $prop->setValue($client, array('test', 'test2'));
        $this->assertEquals("testntest2\n", $client->__getLastRequestHeaders());
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl');

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }
}
