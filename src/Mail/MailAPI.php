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

        if (!empty($options['Restriction'])) {
            foreach ($options['Restriction'] as $restrictionType => $query) {
                $formattedRestrictionType = array();
                foreach ($query as $key => $value) {
                    if ($value === false) {
                        $value = 'false';
                    }
                    $formattedRestrictionType[] = array(
                        'FieldURI' => array('FieldURI' => $this->getFieldUriByName($key, 'message')),
                        'FieldURIOrConstant' => array('Constant' => array('Value' => (string) $value))
                    );
                }

                $options['Restriction'][$restrictionType] = $formattedRestrictionType;
            }
        }

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $messages = $response->getItems()->getMessage();

        if (!is_array($messages)) {
            $messages = array($messages);
        }

        return $messages;
    }

    public function getUnreadMailItems($options = array())
    {
        $unReadOption = array(
            'Restriction' => array(
                'IsEqualTo' => array(
                    'IsRead' => false
                )
            )
        );

        $options = array_replace_recursive($unReadOption, $options);

        return $this->getMailItems($options);
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
            'IsRead' => false
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

    public function getAttachment(Type\AttachmentIdType $attachmentId)
    {
        $request = array (
            'AttachmentIds' => array(
                $attachmentId->toXmlObject()
            )
        );

        $attachment = $this->getClient()->GetAttachment($request);
        return $attachment;
    }
}
