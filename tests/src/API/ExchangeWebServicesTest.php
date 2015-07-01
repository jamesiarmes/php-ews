<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 29-6-15
 * Time: 10:16
 */

namespace jamesiarmes\PEWS\API\Test;

use Mockery;
use PHPUnit_Framework_TestCase;

class ExchangeWebServicesTest extends PHPUnit_Framework_TestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API\ExchangeWebServices')->makePartial();

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
     *
     * @dataProvider cleanServerUrlProvider
     * @param $input
     * @param $expected
     */
    public function testServerGetSet($input, $expected)
    {
        $client = $this->getClientMock();
        $client->setServer($input);
        $actual = $client->getServer();

        $this->assertEquals($expected, $actual);
    }

    public function testUsernameGetSet()
    {
        $client = $this->getClientMock();

        $client->setUsername('test');
        $this->assertEquals('test', $client->getUsername());
    }

    public function testVersionGetSet()
    {
        $client = $this->getClientMock();

        $client->setVersion('test');
        $this->assertEquals('test', $client->getVersion());
    }

    public function testProcessResponse()
    {
        $mockClient = Mockery::mock('jamesiarmes\PEWS\API\NTLMSoapClient\Exchange')
            ->shouldDeferMissing();

        $mockClient->shouldReceive('getResponseCode')->andReturn(200)->once();
        $mockClient->shouldReceive('getResponseCode')->andReturn(400)->once();

        $client = $this->getClientMock();
        $client->setClient($mockClient);

        $this->assertEquals('test', $client->processResponse('test'));

        try {
            $client->processResponse('test');
            $this->fail('Expected exception for non-200 response code');
        }
        catch(\Exception $e)
        {

        }
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
}
