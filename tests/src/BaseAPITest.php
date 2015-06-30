<?php

namespace jamesiarmes\PEWS\Test;

use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Enumeration;

class APITest extends PHPUnit_Framework_TestCase
{
    private $_mock;

    public function getClientMock()
    {
        if (!isset($_mock)) {
            $mock = Mockery::mock('jamesiarmes\PEWS\BaseAPI')->shouldDeferMissing();
            $this->_mock = $mock;
        }

        return $this->_mock;
    }


    public function testClientGetSet()
    {
        $client = $this->getClientMock();
        $this->assertNull($client->getClient());

        $client->setClient('test');
        $this->assertEquals('test', $client->getClient());
    }

    public function testBuildClient()
    {
        $client = $this->getClientMock();
        $expected = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $client->buildClient('test.com', 'username', 'password');
        $actual = $client->getClient();

        $this->assertEquals($expected, $actual);
    }

    public function testCreateItems()
    {
        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $ews = Mockery::mock($ews)->shouldDeferMissing();

        $args = array(
            array('Items' => array('CalendarItem' => array('Start' => 'Now')), 'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );
        $builtArg = Type::buildFromArray($args[0]);

        $ews->shouldReceive('CreateItem')->with(Mockery::on(function ($arg) use ($builtArg) {
        
            return $arg == $builtArg;
        }))->andReturn(true)->once();
        $ews->shouldReceive('CreateItem')->withAnyArgs()->andReturn(false)->once();

        $client = $this->getClientMock();
        $client->setClient($ews);

        $this->assertTrue($client->createItems($args[0]['Items'], $args[1]));
    }
}
