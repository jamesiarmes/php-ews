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

class ExchangeWebServicesTest extends PHPUnit_Framework_TestCase {
    private $_mock;

    public function getClientMock()
    {
        if(!isset($_mock)) {
            $mock = Mockery::mock('jamesiarmes\PEWS\API\ExchangeWebServices')->makePartial();
            $this->_mock = $mock;
        }

        return $this->_mock;
    }

    /**
     *
     * @dataProvider cleanServerUrlProvider
     * @param $input
     * @param $actual
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
     * @param $actual
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
