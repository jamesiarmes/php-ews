<?php

namespace jamesiarmes\PEWS\Test\Calendar;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\Enumeration;
use jamesiarmes\PEWS\API\ExchangeWebServices;

class APITest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $client = $this->getClient();
        $client->deleteAllCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');
    }

    public function tearDown()
    {
        $client = $this->getClient();
        $client->deleteAllCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');
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

        return $client->getCalendar('Test');
    }

    public function testPickCalendar()
    {
        $client = $this->getClient();
        $testCalendar = $client->getCalendar('Test');
        $defaultCalendar = $client->getCalendar();

        $testFolder = $client->getFolderByFolderId($testCalendar->getFolderId()->Id);
        $defaultFolder = $client->getFolderByFolderId($defaultCalendar->getFolderId()->Id);

        $this->assertEquals('Test', $testFolder->DisplayName);
        $this->assertEquals('Calendar', $defaultFolder->DisplayName);
    }

    public function testListChanges()
    {
        $client = $this->getClient();
        $changes = $client->listChanges();

        $this->assertArrayHasKey('SyncState', $changes);
        $this->assertArrayHasKey('Changes', $changes);
    }

    public function testGetCalendarItems()
    {
        $client = $this->getClient();
        $items = $client->getCalendarItems('2015-07-01 00:00', '2015-07-01 23:59');

        $this->assertTrue(is_array($items));
        $this->assertCount(0, $items);
    }

    public function testGetCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00');
        $end = new \DateTime('2015-07-01 9:00');

        $client = $this->getClient();
        $items = $client->createCalendarItems(array(
            array('Subject' => 'Test Get Item 1', 'Start' => $start->format('c'), 'End' => $end->format('c')),
            array('Subject' => 'Test Get Item 2', 'Start' => $start->format('c'), 'End' => $end->format('c'))
        ));

        $itemId = $items[1]->ItemId;

        $item = $client->getCalendarItem($itemId->Id, $itemId->ChangeKey);
        $this->assertEquals('Test Get Item 2', $item->Subject);
    }

    public function testUpdateCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00 AM');
        $end = new \DateTime('2015-07-01 9:00 AM');

        $client = $this->getClient();

        $items = $client->createCalendarItems(array(
            'Subject' => 'Test Update Calendar Item',
            'Start' => $start->format('c'),
            'End' => $end->format('c')
        ));

        $item = $items[0];

        $client->updateCalendarItem($item->ItemId->Id, $item->ItemId->ChangeKey, array(
            'Subject' => 'Test Updated Calendar Item'
        ));

        $item = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $item = $item[0];

        $this->assertEquals('Test Updated Calendar Item', $item->Subject);
    }

    public function testDeleteCalendarItem()
    {
        $start = new \DateTime('2015-07-01 8:00 AM');
        $end = new \DateTime('2015-07-01 9:00 AM');

        $client = $this->getClient();

        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertEmpty($items);

        $items = $client->createCalendarItems(array(
            'Subject' => 'Test Update Calendar Item',
            'Start' => $start->format('c'),
            'End' => $end->format('c')
        ));
        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertNotEmpty($items);

        $client->deleteCalendarItem($items[0]->ItemId->Id, $items[0]->ItemId->ChangeKey);
        $items = $client->getCalendarItems($start->format('c'), $end->format('c'));
        $this->assertEmpty($items);
    }
}
