<?php

namespace jamesiarmes\PEWS\Mail;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use \DateTime;
use jamesiarmes\PEWS\API\Type\MessageType;

class MailAPI extends API
{
    /**
     * @var Type\FolderIdType
     */
    protected $folderId;

    /**
     * @return Type\FolderIdType
     */
    public function getFolderId()
    {
        if (!$this->folderId) {
            $this->folderId = $this->getFolderByDistinguishedId('inbox')->getFolderId();
        }

        return $this->folderId;
    }

    /**
     * Get all mail items in the inbox
     *
     * @param array $options
     * @return Type\MessageType[]
     */
    public function getMailItems($options = array())
    {
        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => array(
                'FolderId' => array(
                    'Id' => $this->getFolderId()->getId(),
                    'ChangeKey' => $this->getFolderId()->getChangeKey()
                )
            )
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $messages = $response->getItems()->getMessage();

        if (!is_array($messages)) {
            $messages = array($messages);
        }

        return $messages;
    }

    /**
     * Updates a calendar item with changes
     *
     * @param $itemId Type\ItemIdType|Type
     * @param $changes
     * @return Type\MessageType[]
     */
    public function updateMailItem($itemId, $changes)
    {
        $setItemFields = array();

        //Add each property to a setItemField
        foreach ($changes as $key => $value) {
            $fullName = $this->getFieldUriByName($key, 'message');

            $setItemFields[] = array(
                'FieldURI' => array('FieldURI' => $fullName),
                'Message' => array($key => $value)
            );
        }

        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => array('Id' => $itemId->getId(), 'ChangeKey' => $itemId->getChangeKey()),
                'Updates' => array('SetItemField' =>$setItemFields)
            )
        );

        $items =  $this->updateItems($request);
        $items = $items->getCalendarItem();

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }

    /**
     * @param $mailItem Type\MessageType|Type\ItemIdType
     */
    public function markMailAsRead($mailItem)
    {
        if ($mailItem instanceof Type\MessageType) {
            $mailItem = $mailItem->getItemId();
        }

        $this->updateMailItem($mailItem, array(
            'IsRead' => true
        ));
    }

    public function sendMail(MessageType $message)
    {
        $items = array('Message' => $message->toXmlObject() );
        $options = array ('MessageDisposition' => 'SendAndSaveCopy' );

        return $this->createItems($items, $options);
    }
}
