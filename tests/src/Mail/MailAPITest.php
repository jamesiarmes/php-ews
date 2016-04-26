<?php

namespace jamesiarmes\PEWS\Test\Mail;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\Mail\MailAPI;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\Enumeration;
use jamesiarmes\PEWS\API\ExchangeWebServices;

class MailAPITest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $client = $this->getClient();
        $items = $client->getMailItems();

        foreach ($items as $item) {
            $client->deleteItems($item->getItemId());
        }
    }

    public function tearDown()
    {
        $client = $this->getClient();
        $items = $client->getMailItems();

        foreach ($items as $item) {
            $client->deleteItems($item->getItemId());
        }
    }

    public function getClient($folder = 'Test')
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
                    'mode' => $mode,
                    'recordFileName' => self::class . '.' . $this->getName() . '.json'
                ]
            ]
        );

        return $client->getMailbox($folder);
    }

    public function getTestFolder()
    {
        return $this->getClient()->getFolderByDisplayName('Test', 'inbox');
    }

    public function createTestMail($message = null)
    {
        $client = $this->getClient();

        if (!$message) {
            //Create a new message
            $message = new Type\MessageType();
            $message->setSubject('Test Message');
            $message->setBody('Test Draft Body');
        }

        //Set the message as not a draft
        $extended = new Type\ExtendedPropertyType();
        $fieldUri = new Type\ExtendedFieldURI();
        $fieldUri->setPropertyTag("0x0E07");
        $fieldUri->setPropertyType(Enumeration\MapiPropertyTypeType::INTEGER);
        $extended->setExtendedFieldURI($fieldUri);
        $extended->setValue(1);
        $message->addExtendedProperty($extended);

        //Save the message to our Test Folder
        $itemId = $client->sendMail($message, array('MessageDisposition' => 'SaveOnly'));
        $client->getClient()->MoveItem(Type::buildFromArray(array(
            'ToFolderId' => array('FolderId' => $this->getTestFolder()->getFolderId()->toArray()),
            'ItemIds' => array(
                'ItemId' => $itemId->toArray()
            )
        )));

        return $itemId;
    }

    public function testGetFolderId()
    {
        $client = $this->getClient();
        $mailClient = new MailAPI();
        $mailClient->setClient($client->getClient());
        $folder = $client->getFolderByFolderId($mailClient->getFolderId()->getId());
        $this->assertEquals('Inbox', $folder->getDisplayName());

        //For this test getClient will default to the Test Folder.
        $client = $this->getClient();
        $folder = $client->getFolderByFolderId($client->getFolderId()->getId());
        $this->assertEquals('Test', $folder->getDisplayName());
    }

    public function testPickMailFolder()
    {
        $client = $this->getClient();

        $client->pickMailFolder(null);
        $folder = $client->getFolderByFolderId($client->getFolderId()->getId());
        $this->assertEquals('Inbox', $folder->getDisplayName());

        $client->pickMailFolder('Test');
        $folder = $client->getFolderByFolderId($client->getFolderId()->getId());
        $this->assertEquals('Test', $folder->getDisplayName());
    }

    public function testSetFolderId()
    {
        $client = $this->getClient();
        $mailClient = new MailAPI();
        $mailClient->setClient($client->getClient());
        $mailClient->setFolderId($client->getFolderId());

        $folder = $client->getFolderByFolderId($mailClient->getFolderId()->getId());
        $this->assertEquals('Test', $folder->getDisplayName());
    }

    public function testGetMailItems()
    {
        $client = $this->getClient();

        $mailItems = $client->getMailItems();
        $this->assertCount(0, $mailItems);

        $this->createTestMail();
        $mailItems = $client->getMailItems();
        $this->assertCount(1, $mailItems);

        $mailClient = new MailAPI();
        $mailClient->setClient($client->getClient());
        $mailItems = $client->getMailItems($client->getFolderId());
        $this->assertCount(1, $mailItems);
    }

    public function testGetUnreadMailItems()
    {
        $client = $this->getClient();
        $unreadItems = $client->getUnreadMailItems();
        $this->assertCount(0, $unreadItems);

        $this->createTestMail();
        $unreadItems = $client->getUnreadMailItems();
        $this->assertCount(0, $unreadItems);

        $message = new Type\MessageType();
        $message->setSubject('Test Message');
        $message->setBody('Test Draft Body');
        $message->setIsRead(false);

        $this->createTestMail($message);
        $unreadItems = $client->getUnreadMailItems();
        $this->assertCount(1, $unreadItems);
    }

    public function testMarkMailAsRead()
    {
        $client = $this->getClient();
        $this->createTestMail();

        $mailItems = $client->getMailItems();
        $item = $mailItems[0];
        $this->assertEquals(true, $item->isRead());

        $client->markMailAsRead($item, false);
        $mailItems = $client->getMailItems();
        $item = $mailItems[0];
        $this->assertEquals(false, $item->isRead());

        $client->markMailAsRead($item, true);
        $mailItems = $client->getMailItems();
        $item = $mailItems[0];
        $this->assertEquals(true, $item->isRead());
    }
}
