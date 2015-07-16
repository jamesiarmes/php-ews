<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 25-6-15
 * Time: 17:23
 */

namespace jamesiarmes\PEWS\Test\API;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use jamesiarmes\PEWS\API\NTLMSoapClient;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use Mockery;
use GuzzleHttp\Middleware;
use SoapHeader;
use jamesiarmes\PEWS\API;

class NTLMSoapClientTest extends PHPUnit_Framework_TestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API\NTLMSoapClient')->shouldDeferMissing();
        return $mock;
    }

    public function getClient()
    {
        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'playback';
        }

        $auth = [
            'server' => 'server',
            'user' => 'user',
            'password' => 'password'
        ];

        if (is_file(getcwd() . '/Resources/auth.json')) {
            $auth = json_decode(file_get_contents(getcwd() . '/Resources/auth.json'), true);
        }

        $client = new API();
        $client->buildClient(
            $auth['server'],
            $auth['user'],
            $auth['password'],
            [
                'httpPlayback' => [
                    'mode' => $mode
                ]
            ]
        );

        return $client->getClient()->getClient();
    }

    public function testGetClient()
    {
        $mock = $this->getClient();

        $this->assertInstanceOf('GuzzleHttp\Client', $mock->getHttpClient());
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

        $mock->shouldReceive('getHttpClient')->andReturn($client);

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

        $client = new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array('user'=>'user', 'password'=>'password'));

        $prop->setValue($client, array('test', 'test2'));
        $this->assertEquals("testntest2\n", $client->__getLastRequestHeaders());
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array('user'=>'user', 'password'=>'password'));

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }


    public function testConstructor()
    {
        try {
            new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array());

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        try {
            new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array('user' => 'testUser'));

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        try {
            new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array('password' => 'testPassword'));

            $this->fail('No exception was raised');
        } catch (\Exception $e) {
        }

        $ntlmClient = new NTLMSoapClient(__DIR__ . '/../../../Resources/wsdl/services.wsdl', array(
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

        $this->assertEquals('testUser', $username->getValue($ntlmClient));
        $this->assertEquals('testPassword', $password->getValue($ntlmClient));

        $expected = new SoapHeader(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'RequestServerVersion Version="testVersion"'
        );
        $this->assertEquals($expected, $ntlmClient->__default_headers[0]);

        $expected = new SoapHeader(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'ExchangeImpersonation',
            'testImpersonation'
        );
        $this->assertEquals($expected, $ntlmClient->__default_headers[1]);
    }
}
