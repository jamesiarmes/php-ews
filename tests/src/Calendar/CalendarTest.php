<?php

namespace jamesiarmes\PEWS\Calendar\Test;

use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\Enumeration;
use jamesiarmes\PEWS\API\ExchangeWebServices;

class APITest extends PHPUnit_Framework_TestCase
{
    /**
     * Get the mock to test with
     *
     * @return Mockery\Mock
     */
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\Calendar\CalendarAPI')
            ->shouldDeferMissing();

        $folderId = new \stdClass();
        $folderId->Id = 'Folder Id';
        $folderId->ChangeKey = 'Change Key';
        $mock->shouldReceive('getFolderId')->andReturn($folderId);

        return $mock;
    }

    public function testListChanges()
    {
        $response = new \stdClass();
        $response->SyncState = 'syncStateString';
        $response->Changes = new \stdClass();
        $response->Changes->Create = array();

        $api = $this->getClientMock();
        $api->shouldReceive('listChanges')->andReturn($response)->once();

        $syncedResponse = $api->listChanges();
        $this->assertEquals($response, $syncedResponse);

        $response = new \stdClass();
        $response->SyncState = 'syncStateString';
        $response->Changes = new \stdClass();
        $response->Changes->Updates = array();
        $api->shouldReceive('listChanges')->withAnyArgs()->andReturn($response)->once();

        $syncedResponse = $api->listChanges($syncedResponse->SyncState);
        $this->assertEquals($response, $syncedResponse);
    }

    /**
     * @param $arguments
     * @param $response
     * @param $firstItemName
     * @dataProvider getCalendarItemsProvider
     */
    public function testGetCalendarItems($arguments, $response, $firstItemName)
    {
        $api = $this->getClientMock();

        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $ews = Mockery::mock($ews)->shouldDeferMissing();
        $ews->shouldReceive('FindItem')->andReturn($response)->once();

        $api->setClient($ews);
        $items = call_user_func_array(array($api, 'getCalendarItems'), $arguments);

        $this->assertEquals($firstItemName, $items[0]->Subject);
    }

    public function testUpdateCalendarItem()
    {
        $mock = $this->getClientMock();
        $mock->shouldReceive('updateItems')->andReturn(array(
            'SomeItem'
        ));

        $response = $mock->updateCalendarItem('Id', 'ChangeKey', array(
            'Subject' => 'Something',
            'Start' => 'Now'
        ));

        $this->assertEquals(array('SomeItem'), $response);
    }

    public function testDeleteCalendarItem()
    {
        $mock = $this->getClientMock();
        $mock->shouldReceive('deleteItems')->andReturn(true)->once();

        $this->assertEquals(true, $mock->deleteCalendarItem('ItemId', 'ChangeKey'));
    }

    public function getCalendarItemsProvider()
    {
        $firstItem = array(
            'ItemId' => array(
                'Id' => 'AAMkADM0NmE2OGUwLTExMjMtNGRmNi1iM2EyLTRlNDAwYjZiY2E4ZQBGAAAAAABCLJ6ML7uRSqaHiDqP2uccBwD2KQU45YsnQIJ9eQMp5SanAAAAXiNtAAD2KQU45YsnQIJ9eQMp5SanAAAAXnYVAAA=',
                'ChangeKey' => 'DwAAABYAAAD2KQU45YsnQIJ9eQMp5SanAAAAXn8l'
            ),
            'Subject' => 'Test',
            'HasAttachments' => false,
            'IsAssociated' => false,
            'Start' => '2015-07-03T06:00:00Z',
            'End' => '2015-07-03T07:00:00Z',
            'LegacyFreeBusyStatus' => 'Busy',
            'CalendarItemType' => 'Single',
            'Organizer' => array(
                'Mailbox' => array(
                    'Name' => 'Test User',
                    'MailboxType' => 'OneOff'
                )
            )
        );

        $secondItem = $firstItem;
        $secondItem['Subject'] = 'Test 2';
        $secondItem['Start'] = '2015-07-03T07:00:00Z';
        $secondItem['End'] = '2015-07-03T08:00:00Z';

        $responseTemplate = Type::buildFromArray(array(
                            'CalendarItem' => array()
                        ));

        $firstResponse = clone $responseTemplate;
        $firstResponse->CalendarItem = array(Type::buildFromArray($firstItem), Type::buildFromArray($secondItem));

        $secondResponse = clone $responseTemplate;
        $secondResponse->CalendarItem = array(Type::buildFromArray($firstItem));

        $thirdResponse = clone $responseTemplate;
        $thirdResponse->CalendarItem = array(Type::buildFromArray($secondItem));

        return array(
            array( array(), $firstResponse, 'Test'),
            array( array('6:00 AM', '9:00 AM'), $secondResponse, 'Test'),
            array( array('9:00 AM'), $thirdResponse, 'Test 2')
        );
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
