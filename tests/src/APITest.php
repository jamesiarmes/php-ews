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
    private $httpClient;
    private $container;
    private static $callList = [];
    private static $mode = 'playback';

    public function setUp()
    {
        $this->setUpHttpClient();
    }

    public function tearDown()
    {
        $this->storeCalls();

        Mockery::close();
    }

    public static function tearDownAfterClass()
    {
        if (self::$mode == 'record') {
            $saveDir = getcwd() . '/Resources/recordings';
            file_put_contents($saveDir . '/saveState.json', json_encode(self::$callList));
        }
    }

    public function setUpHttpClient()
    {
        $handler = HandlerStack::create();

        if (self::$mode == 'record') {
            $this->container = [];
            $history = Middleware::history($this->container);
            $handler->push($history);
        } elseif (self::$mode == 'playback') {
            $name = self::class . "::" . $this->getName();
            $recordings = $this->getRecordings();

            if (isset($recordings[$name])) {
                $playList = $recordings[$name];
                $mockedResponses = [];
                foreach ($playList as $item) {
                    $mockedResponses[] = new Response($item['statusCode'], $item['headers'], $item['body']);
                }

                $mockHandler = new MockHandler($mockedResponses);
                $handler = HandlerStack::create($mockHandler);
            }

        }

        $httpClient = new \GuzzleHttp\Client(['handler' => $handler]);

        $this->httpClient = $httpClient;
    }

    public function storeCalls()
    {
        if (self::$mode != 'record') {
            return;
        }

        $name = self::class . "::" . $this->getName();

        self::$callList[$name] = [];
        foreach ($this->container as $item) {
            /** @var Response $response */
            $response = $item['response'];
            self::$callList[$name][] = [
                'statusCode' => $response->getStatusCode(),
                'headers' => $response->getHeaders(),
                'body' => $response->getBody()->__toString()
            ];
        }

        $this->container = [ ];
        return $this;
    }

    public function getRecordings()
    {
        $saveDir = getcwd() . '/Resources/recordings';
        $recordings = file_get_contents($saveDir . '/saveState.json');

        return json_decode($recordings, true);
    }

    public function testGetFieldURIByName()
    {
        $mock = $this->getClientMock();

        $this->assertEquals('item:Subject', $mock->getFieldURIByName('Subject'));
        $this->assertEquals('calendar:Start', $mock->getFieldURIByName('Start'));
        $this->assertEquals('calendar:Recurrence', $mock->getFieldURIByName('Recurrence'));
        $this->assertEquals('task:Recurrence', $mock->getFieldURIByName('Recurrence', 'task'));
        $this->assertEquals('calendar:Recurrence', $mock->getFieldURIByName('Recurrence', 'somePreference'));
        $this->assertFalse($mock->getFieldURIByName('thisShouldntExist'));
    }

    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API')
            ->shouldDeferMissing();

        return $mock;
    }

    public function getClient()
    {
        $client = new API();
        $client->buildClient(
            'server',
            'username',
            'password',
            [
                'httpClient' => $this->httpClient
            ]
        );

        return $client;
    }

    public function testGetFolderByDistinguishedId()
    {
        $client = $this->getClient();

        $folder = $client->getFolderByDistinguishedId('calendar');
        $this->assertEquals('Calendar', $folder->DisplayName);
    }

    /**
     * Test that get and set clients work properly
     */
    public function testClientGetSet()
    {
        $client = $this->getClientMock();

        //By default the client should be null
        $this->assertNull($client->getClient());

        //Set client should just let us set anything at this point
        $client->setClient('test');
        $this->assertEquals('test', $client->getClient());
    }

    /**
     * Test that building the client works
     */
    public function testBuildClient()
    {
        $client = $this->getClientMock();

        //Create our expected item, get our class to build our item, then compare
        $expected = new ExchangeWebServices('test.com', 'username', 'password',
            ['version' => ExchangeWebServices::VERSION_2010]);
        $client->buildClient('test.com', 'username', 'password');
        $actual = $client->getClient();

        $this->assertEquals($expected, $actual);
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
        $this->assertObjectHasAttribute('ItemId', $response);
    }

    public function testDeleteItems()
    {
        $mock = $this->getClientMock();
        $ews = new ExchangeWebServices('test.com', 'username', 'password',
            ['version' => ExchangeWebServices::VERSION_2010]);
        $ews = Mockery::mock($ews)->shouldDeferMissing();
        $mock->setClient($ews);

        $expected = array(
            'ItemIds' => array(
                'ItemId' => array(
                    array('Id' => 'Id', 'ChangeKey' => 'ChangeKey')
                )
            ),
            'DeleteType' => 'MoveToDeletedItems'
        );
        $expected = Type::buildFromArray($expected);

        $ews->shouldReceive('DeleteItem')->with(Mockery::on(function ($request) use ($expected) {
            $this->assertEquals($expected, $request);

            return true;
        }))->andReturn(true);

        $mock->deleteItems(array('Id' => 'Id', 'ChangeKey' => 'ChangeKey'));
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

        $this->assertEquals($expected, $folder->DisplayName);
    }

    /**
     * Test that the syncFolderItems() function passes the correct arguments to it's client
     *
     * @dataProvider listChangesProvider
     * @param $input
     */
    public function testListItemChanges($folderInput)
    {
        $client = $this->getClient();
        $folder = call_user_func_array(array($client, 'getFolderByDisplayname'), $folderInput);

        $response = call_user_func_array(array($client, 'listItemChanges'), array($folder->FolderId->Id));
        $this->assertArrayHasKey('SyncState', $response);
        $this->assertArrayHasKey('Changes', $response);
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
            array('AllItems', 'AllItems')
        );
    }
}
