<?php

namespace jamesiarmes\PEWS\Test;

use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Enumeration;

class APITest extends PHPUnit_Framework_TestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('jamesiarmes\PEWS\API')
            ->shouldDeferMissing();
        return $mock;
    }

    public function testGetFieldURIByName()
    {
        $mock = $this->getClientMock();

        $this->assertEquals('item:Subject', $mock->getFieldURIByName('Subject'));
        $this->assertEquals('calendar:Start', $mock->getFieldURIByName('Start'));
        $this->assertFalse($mock->getFieldURIByName('thisShouldntExist'));
    }

    public function testGetFolderByDistinguishedId()
    {
        $client = $this->getClientMock();
        $expected = array(
            'DistinguishedFolderId' => array(
                'Id' => 'calendar'
            )
        );
        $client->shouldReceive('getFolder')->with(Mockery::on(function ($request) use ($expected) {
            $this->assertEquals($expected, $request);

            return true;
        }))->andReturn(true)->once();

        $client->getFolderByDistinguishedId('calendar');
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
        $expected = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $client->buildClient('test.com', 'username', 'password');
        $actual = $client->getClient();

        $this->assertEquals($expected, $actual);
    }

    /**
     * Test that the createItems function passes the correct variables to the API Client
     */
    public function testCreateItems()
    {
        //Let's mock up our client
        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $ews = Mockery::mock($ews)->shouldDeferMissing();

        //This is the arguments that we will pass in, and check against
        $args = array(
            array(
                'Items' => array('CalendarItem' => array('Start' => 'Now')),
                'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
            ),
            array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE)
        );

        //The function we call automatically builds the argument, so we have to build it as well in order to compare
        $builtArg = Type::buildFromArray($args[0]);

        $ews->shouldReceive('CreateItem')->with(Mockery::on(function ($arg) use ($builtArg) {
            $this->assertEquals($arg, $builtArg);
            return true;
        }))->andReturn(true)->once();

        $client = $this->getClientMock();
        $client->setClient($ews);

        $client->createItems($args[0]['Items'], $args[1]);
    }

    public function testDeleteItems()
    {
        $mock = $this->getClientMock();
        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
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
     * Test that the syncFolderItems() function passes the correct arguments to it's client
     *
     * @dataProvider listChangesProvider
     * @param $input
     */
    public function testListItemChanges($input, $expected)
    {
        //Build our expected items, and our mocked API Client
        $expected = Type::buildFromArray($expected);
        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $ews = Mockery::mock($ews)->shouldDeferMissing();

        //Our function expects a certain format returned, this creates that format
        $trueReturn = Type::buildFromArray(array('ResponseMessages' => array('SyncFolderItemsResponseMessage'=>true)));

        $ews->shouldReceive('SyncFolderItems')->with(Mockery::on(function ($arg) use ($expected) {
            $this->assertEquals($expected, $arg);
            return true;
        }))->andReturn($trueReturn)->once();

        $client = $this->getClientMock();
        $client->setClient($ews);

        call_user_func_array(array($client, 'listItemChanges'), $input);
    }

    /**
     * Provide test data for the testSyncFolderItems function
     *
     * @return array
     */
    public function listChangesProvider()
    {
        return array(
            //Test that default behavior works as expected
            array(array('test'), array(
                'ItemShape' => array('BaseShape' => 'IdOnly'),
                'SyncFolderId' => array('FolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '10'
            )),

            //Test that providing a syncState adds that and allows more properties to be returned
            array(array('test', 'someState'), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('FolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '10',
                'SyncState' => 'someState'
            )),

            //Test that you can override settings
            array(array('test', 'someState', array('MaxChangesReturned'=>20)), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('FolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '20',
                'SyncState' => 'someState'
            )),

            //Test that even when you send a NULL syncState, you can still override the ItemShape
            array(array('test', null, array('MaxChangesReturned'=>20, 'ItemShape' => array('BaseShape' => 'AllProperties'))), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('FolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '20'
            ))
        );
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
