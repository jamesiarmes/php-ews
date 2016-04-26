<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 29-6-15
 * Time: 10:16
 */

namespace jamesiarmes\PEWS\Test\API;

use jamesiarmes\PEWS\API\ClassMap;
use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\ExchangeWebServicesAuth;
use jamesiarmes\PEWS\API\NTLMSoapClient;
use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;

class ExchangeWebServicesTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API\ExchangeWebServices')->shouldDeferMissing();

        return $mock;
    }

    /**
     *
     * @dataProvider cleanServerUrlProvider
     * @param $input
     * @param $expected
     */
    public function testCleanServerUrl($input, $expected)
    {
        $client = $this->getClientMock();
        $actual = $client->cleanServerUrl($input);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider processResponseFailProvider
     * @expectedException \Exception
     */
    public function testProcessResponseFail($input)
    {
        $mockClient = Mockery::mock('jamesiarmes\PEWS\API\NTLMSoapClient\Exchange')
            ->shouldDeferMissing();

        $mockClient->shouldReceive('getResponseCode')->andReturn(300)->once();

        $client = $this->getClientMock();
        $client->setClient($mockClient);

        $response = $client->processResponse($input);
    }
    
    public function testPrimarySmtpMailbox()
    {
        $client = $this->getClientMock();
        $this->assertNull($client->getPrimarySmtpMailbox());
        $this->assertNull($client->getPrimarySmtpEmailAddress());

        $expectedMailbox = new Type\EmailAddressType();
        $expectedMailbox->setEmailAddress('test@test.com');
        $client->setPrimarySmtpEmailAddress('test@test.com');

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');

        $client = new ExchangeWebServices('test@test.com', 'user', 'password', [
            'primarySmtpEmailAddress' => 'test@test.com'
        ]);

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');

        $client = new ExchangeWebServices('test@test.com', 'user', 'password', [
            'impersonation' => 'test@test.com'
        ]);

        $this->assertEquals($client->getPrimarySmtpMailbox(), $expectedMailbox);
        $this->assertEquals($client->getPrimarySmtpEmailAddress(), 'test@test.com');
    }

    public function cleanServerUrlProvider()
    {
        return array(
            array('test.com', 'test.com'),
            array('test.com/', 'test.com'),
            array('https://test.com', 'test.com'),
            array('https://test.com/', 'test.com'),
            array('https://test.com/ews/', 'test.com/ews'),
            array('https://test.com:9000/ews', 'test.com:9000/ews'),
            array('https://user:pass@test.com:9000/ews', 'test.com:9000/ews')
        );
    }

    public function processResponseFailProvider()
    {
        $secondResponse = array(
            'ResponseMessages' => array(
                'Message' => array(
                    'ResponseClass' => 'Error',
                    'MessageText' => 'Some Text'
                )
            )
        );

        $secondResponse = json_decode(json_encode($secondResponse), false);

        return array(
            array(false),
            array($secondResponse)
        );
    }
}
