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
        $mock = Mockery::mock('jamesiarmes\PEWS\BaseAPI')
            ->shouldDeferMissing();
        return $mock;
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

    /**
     * @dataProvider syncFolderItemsProvider
     * @param $input
     */
    public function testSyncFolderItems($input, $expected)
    {
        $expected = Type::buildFromArray($expected);
        $ews = new ExchangeWebServices('test.com', 'username', 'password', ExchangeWebServices::VERSION_2010);
        $ews = Mockery::mock($ews)->shouldDeferMissing();

        $trueReturn = Type::buildFromArray(array('ResponseMessages' => array('SyncFolderItemsResponseMessage'=>true)));
        $falseReturn = Type::buildFromArray(array('ResponseMessages' => array('SyncFolderItemsResponseMessage'=>false)));

        $ews->shouldReceive('SyncFolderItems')->with(Mockery::on(function ($arg) use ($expected) {
            $this->assertEquals($expected, $arg);
            return true;
        }))->andReturn($trueReturn)->once();

        $client = $this->getClientMock();
        $client->setClient($ews);

        call_user_func_array(array($client, 'syncFolderItems'), $input);
    }

    /**
     * Provide test data for the testSyncFolderItems function
     *
     * @return array
     */
    public function syncFolderItemsProvider()
    {
        return array(
            //Test that default behavior works as expected
            array(array('test'), array(
                'ItemShape' => array('BaseShape' => 'IdOnly'),
                'SyncFolderId' => array('DistinguishedFolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '10'
            )),

            //Test that providing a syncState adds that and allows more properties to be returned
            array(array('test', 'someState'), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('DistinguishedFolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '10',
                'SyncState' => 'someState'
            )),

            //Test that you can override settings
            array(array('test', 'someState', array('MaxChangesReturned'=>20)), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('DistinguishedFolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '20',
                'SyncState' => 'someState'
            )),

            //Test that even when you send a NULL syncState, you can still override the ItemShape
            array(array('test', null, array('MaxChangesReturned'=>20, 'ItemShape' => array('BaseShape' => 'AllProperties'))), array(
                'ItemShape' => array('BaseShape' => 'AllProperties'),
                'SyncFolderId' => array('DistinguishedFolderId' => array('Id' => 'test')),
                'SyncScope' => 'NormalItems',
                'MaxChangesReturned' => '20'
            ))
        );
    }
}
