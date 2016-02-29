<?php

namespace jamesiarmes\PEWS\Test;

use GuzzleHttp\Psr7\Response;
use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Enumeration;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\MockHandler;

class APITest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function getClient()
    {
        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'record';
        }
        
        $auth = [
            'server' => 'server',
            'user' => 'user',
            'password' => 'password'
        ];

        if (is_file(getcwd() . '/Resources/auth.json')) {
            $auth = json_decode(file_get_contents(getcwd() . '/Resources/auth.json'), true);
        }

        $client = API::withUsernameAndPassword(
            $auth['server'],
            $auth['user'],
            $auth['password'],
            [
                'httpPlayback' => [
                    'mode' => $mode,
                    'recordFileName' => self::class . '.' . $this->getName() . '.json'
                ]
            ]
        );

        return $client;
    }

    public function testPrimarySmtpAddress()
    {
        $client = $this->getClient();
        $originalPrimarySmtp = $client->getPrimarySmptEmailAddress();
        $this->assertNull($originalPrimarySmtp);

        $client->setPrimarySmtpEmailAddress('gareth@true.nl');
        $this->assertEquals('gareth@true.nl', $client->getPrimarySmptEmailAddress());
        $this->assertEquals('gareth@true.nl', $client->getPrimarySmtpMailbox()->getEmailAddress());
    }

    public function testCreateFolders()
    {
        $client = $this->getClient();

        $parentFolder = $client->getFolderByDistinguishedId('inbox');
        $testCreateFolder = $client->getFolderByDisplayName('Test Create Folder', $parentFolder->getFolderId());

        $this->assertFalse($testCreateFolder);

        $client->createFolders('Test Create Folder', $parentFolder->getFolderId());
        $testCreateFolder = $client->getFolderByDisplayName('Test Create Folder', $parentFolder->getFolderId());
        $this->assertNotFalse($testCreateFolder);

        $client->deleteFolder($testCreateFolder->getFolderId());
    }

    public function testDeleteFolder()
    {
        $client = $this->getClient();

        $parentFolder = $client->getFolderByDistinguishedId('inbox');
        $client->createFolders('Test Create Folder', $parentFolder->getFolderId());
        $testCreateFolder = $client->getFolderByDisplayName('Test Create Folder', $parentFolder->getFolderId());
        $this->assertNotFalse($testCreateFolder);

        $client->deleteFolder($testCreateFolder->getFolderId());

        $testCreateFolder = $client->getFolderByDisplayName('Test Create Folder', $parentFolder->getFolderId());
        $this->assertFalse($testCreateFolder);
    }

    public function testGetFieldURIByName()
    {
        $mock = $this->getClient();

        $this->assertEquals('item:Subject', $mock->getFieldURIByName('Subject', 'item'));
        $this->assertEquals('calendar:Start', $mock->getFieldURIByName('Start', 'calendar'));
        $this->assertEquals('calendar:Recurrence', $mock->getFieldURIByName('Recurrence', 'calendar'));
        $this->assertEquals('task:Recurrence', $mock->getFieldURIByName('Recurrence', 'task'));
        $this->assertEquals('calendar:Recurrence', $mock->getFieldURIByName('Recurrence', 'calendar'));
        $this->assertFalse($mock->getFieldURIByName('thisShouldntExist'));
    }

    public function testGetFolderByDistinguishedId()
    {
        $client = $this->getClient();

        $folder = $client->getFolderByDistinguishedId('calendar');
        $this->assertEquals('Calendar', $folder->getDisplayName());
    }

    /**
     * Test that get and set clients work properly
     */
    public function testClientGetSet()
    {
        $client = $this->getClient();

        //By default the client should be null
        $this->assertInstanceOf('jamesiarmes\PEWS\API\ExchangeWebServices', $client->getClient());

        //Set client should just let us set anything at this point
        $client->setClient('test');
        $this->assertEquals('test', $client->getClient());
    }

    /**
     * Test that building the client works
     */
    public function testBuildClient()
    {
        $api = new API();
        $api->buildClient('test.com', 'username', 'password');

        //Create our expected item, get our class to build our item, then compare
        $expected = new ExchangeWebServices(
            'test.com',
            'username',
            'password',
            ['version' => ExchangeWebServices::VERSION_2010]
        );
        $actual = $api->getClient();

        $this->assertEquals($expected, $actual);
    }

    public function testWithUsernameAndPassword()
    {
        //Create our expected item, get our class to build our item, then compare
        $expected = ExchangeWebServices::fromUsernameAndPassword(
            'test.com',
            'username',
            'password',
            ['version' => ExchangeWebServices::VERSION_2010]
        );
        $client = API::withUsernameAndPassword('test.com', 'username', 'password');
        $actual = $client->getClient();

        $this->assertEquals($expected, $actual);
    }

    public function testWithCallbackToken()
    {
        //Create our expected item, get our class to build our item, then compare
        $expected = ExchangeWebServices::fromCallbackToken(
            'test.com',
            'token',
            ['version' => ExchangeWebServices::VERSION_2010]
        );
        $client = API::withCallbackToken('test.com', 'token');
        $actual = $client->getClient();

        $this->assertEquals($expected, $actual);
    }

    /**
     * Test that getItems get's the correct items and accepts either an array of ItemId object
     */
    public function testGetItems()
    {
        $start = new \DateTime();

        //This is the arguments that we will pass in, and check against
        $args = array(
            array(
                'Items' => array(
                    'CalendarItem' => array(
                        'Subject' => 'Test Get Items',
                        'Start' => $start->format('c')
                    )
                ),
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
            ),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        $client = $this->getClient();
        $response = $client->createItems($args[0]['Items'], $args[1]);
        $this->assertNotNull($response->getId());

        $item = $client->getItem(['Id' => $response->getId(), 'ChangeKey' => $response->getChangeKey()]);
        $this->assertEquals('Test Get Items', $item->getSubject());

        $item = $client->getItem($response);
        $this->assertEquals('Test Get Items', $item->getSubject());

        $client->deleteItems($response, ['SendMeetingCancellations' => 'SendToNone']);
    }

    /**
     * Test that the createItems function passes the correct variables to the API Client
     */
    public function testCreateItems()
    {
        $start = new \DateTime();

        //This is the arguments that we will pass in, and check against
        $args = array(
            array(
                'Items' => array(
                    'CalendarItem' => array(
                        'Subject' => 'Test Create Items',
                        'Start' => $start->format('c')
                    )
                ),
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
            ),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        $client = $this->getClient();
        $response = $client->createItems($args[0]['Items'], $args[1]);
        $this->assertNotNull($response->getId());

        $client->deleteItems($response, ['SendMeetingCancellations' => 'SendToNone']);
    }

    public function testDeleteItems()
    {
        $start = new \DateTime();

        $client = $this->getClient();
        //This is the arguments that we will pass in, and check against
        $args = array(
            array(
                'Items' => array(
                    'CalendarItem' => array(
                        'Subject' => 'Test Delete Item',
                        'Start' => $start->format('c')
                    )
                ),
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
            ),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        $item = $client->createItems($args[0]['Items'], $args[1]);
        $this->assertTrue($client->deleteItems($item, ['SendMeetingCancellations' => 'SendToNone']));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage The specified object was not found in the store
     */
    public function testDeleteItemsFail()
    {
        $client = $this->getClient();
        $start = new \DateTime();
        $args = array(
            array(
                'Items' => array(
                    'CalendarItem' => array(
                        'Subject' => 'Test Delete Item',
                        'Start' => $start->format('c')
                    )
                ),
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
            ),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        $item = $client->createItems($args[0]['Items'], $args[1]);
        $client->deleteItems($item->toArray(), ['SendMeetingCancellations' => 'SendToNone']);
        $client->deleteItems($item->toArray(), ['SendMeetingCancellations' => 'SendToNone']);
    }

    /**
     * @dataProvider getFolderByDisplayNameProvider
     *
     * @param $input
     * @param $expected
     */
    public function testGetFolderByDisplayName($input, $expected)
    {
        $client = $this->getClient();
        $folder = $client->getFolderByDisplayName($input);

        $this->assertEquals($expected, $folder->getDisplayName());
    }

    public function testGetFolderByDisplayNameFail()
    {
        $client = $this->getClient();
        $folder = $client->getFolderByDisplayName('Something made up that shouldnt exist');

        $this->assertFalse($folder);
    }

    /**
     * Test that the syncFolderItems() function passes the correct arguments to it's client.
     *
     * @dataProvider listChangesProvider
     * @param $folderInput
     */
    public function testListItemChanges($folderInput)
    {

        $client = $this->getClient();
        $folder = call_user_func_array(array($client, 'getFolderByDisplayname'), $folderInput);

        //Create a calendar item in our folder to have a change to test again
        $start = new \DateTime();
        $args = array(
            array(
                'Items' => array(
                    'CalendarItem' => array(
                        'Subject' => 'Test Sync Item Changes',
                        'Start' => $start->format('c')
                    )
                )
            ),
            array(
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE,
                'SavedItemFolderId' => array('FolderId' => $folder->getFolderId())
            )
        );

        $item = $client->createItems($args[0]['Items'], $args[1]);

        $changes = $client->listItemChanges($folder->getFolderId());
        $this->assertNotNull($changes->getSyncState());
        $this->assertNotNull($changes->getChanges());

        $moreChanges = $client->listItemChanges($folder->getFolderId(), $changes->getSyncState());
        $this->assertNotNull($moreChanges->getSyncState());
        $this->assertNotNull($moreChanges->getChanges());

        $this->assertNotEquals($changes->getSyncState(), $moreChanges->getSyncState());
        $this->assertNotEquals($changes->getChanges(), $moreChanges->getChanges());

        $client->deleteItems($item, ['SendMeetingCancellations' => 'SendToNone']);
    }

    /**
     * Provide test data for the testSyncFolderItems function
     *
     * @return array
     */
    public function listChangesProvider()
    {
        return array(
            array(array('Test', 'calendar'))
        );
    }

    public function getFolderByDisplayNameProvider()
    {
        return array(
            array('Common Views', 'Common Views')
        );
    }
}
