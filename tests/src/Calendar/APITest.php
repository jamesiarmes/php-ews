<?php

namespace jamesiarmes\PEWS\Calendar\Test;

use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\Enumeration;

class APITest extends PHPUnit_Framework_TestCase
{
    /**
     * Get the mock to test with
     *
     * @return Mockery\Mock
     */
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\Calendar\API')
            ->shouldDeferMissing();

        return $mock;
    }

    /**
     * Test that the getCalendarFolder() function calls the right function on it's parent class
     */
    public function testGetCalendarFolder()
    {
        $mock = $this->getClientMock();

        $return = new \stdClass();
        $return->CalendarFolder = 'test';
        $mock->shouldReceive('getFolder')->with(Mockery::on(function ($args) {
        
            $this->assertEquals('calendar', $args);

            return true;
        }))->andReturn($return);

        $mock->getCalendarFolder();
    }

    /**
     * Test that the createItems() function passes the correct arguments to it's parent
     */
    public function testCreateItems()
    {
        $api = $this->getClientMock();

        $args = array(
            array('CalendarItem' => array('Start' => 'Now')),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        $api->shouldReceive('createItems')->withArgs($args)->andReturn(true);
        $api->shouldReceive('createItems')->withAnyArgs()->andReturn(false);

        $this->assertTrue($api->createCalendarItems($args[0]['CalendarItem']));
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
