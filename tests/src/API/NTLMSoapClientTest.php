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
                    'mode' => $mode,
                    'recordFileName' => self::class . '::' . $this->getName() . '.json'
                ]
            ]
        );

        return $client->getClient()->getClient();
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient('location', 'user', 'password',
            __DIR__ . '/../../../Resources/wsdl/services.wsdl');

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }


    public function testConstructor()
    {
        $ntlmClient = new NTLMSoapClient(
            'testLocation',
            'testUser',
            'testPassword',
            __DIR__ . '/../../../Resources/wsdl/services.wsdl',
            array(
                'version' => 'testVersion',
                'impersonation' => 'testImpersonation'
            )
        );

        $reflection = new ReflectionClass('\jamesiarmes\PEWS\API\NTLMSoapClient\Exchange');

        $username = $reflection->getProperty('user');
        $username->setAccessible(true);

        $password = $reflection->getProperty('password');
        $password->setAccessible(true);

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
            API\Type\ExchangeImpersonation::fromEmailAddress('testImpersonation')->toXmlObject()
        );
        $this->assertEquals($expected, $ntlmClient->__default_headers[1]);
    }
}
