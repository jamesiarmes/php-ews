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
                'FolderId' => $this->getFolderId()->toXmlObject()
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
        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => $itemId->toArray(),
                'Updates' => array(
                    'SetItemField' => $this->buildUpdateItemChanges('Message', 'message', $changes)
                )
            )
        );

        $items = $this->updateItems($request);

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

    public function sendMail(MessageType $message, $options = array())
    {
        $items = array('Message' => $message->toXmlObject());
        $defaultOptions = array(
            'MessageDisposition' => 'SendAndSaveCopy',
        );

        if ($this->getPrimarySmtpMailbox() != null) {
            $sentItems = $this->getFolderByDistinguishedId('sentitems')->getFolderId();
            $defaultOptions['SavedItemFolderId'] =
                array('FolderId' => $sentItems->toXmlObject());
        }

        $options = array_replace_recursive($defaultOptions, $options);

        return $this->createItems($items, $options);
    }
}
