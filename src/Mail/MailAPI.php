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
     * @param Type\FolderIdType $folderId
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
    }

    /**
     * @param string $displayName
     * @param string|Type\FolderIdType $parentFolder
     */
    public function pickMailFolder($displayName = null, $parentFolder = 'inbox')
    {
        if ($displayName === null) {
            $this->folderId = $this->getFolderByDistinguishedId('inbox')->getFolderId();
            return;
        }

        $folder = $this->getFolderByDisplayName($displayName, $parentFolder);
        $this->folderId = $folder->getFolderId();
    }

    protected function formatRestrictions($restrictions)
    {
        foreach ($restrictions as $restrictionType => $query) {
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

            $restrictions[$restrictionType] = $formattedRestrictionType;
        }

        return $restrictions;
    }

    /**
     * Get all mail items in the inbox
     *
     * @param Type\FolderIdType
     * @param array $options
     * @return Type\MessageType[]
     */
    public function getMailItems($folderId = null, $options = array())
    {
        if (!$folderId) {
            $folderId = $this->getFolderId();
        }

        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => array(
                'FolderId' => $folderId->toXmlObject()
            )
        );

        if (!empty($options['Restriction'])) {
            $options['Restriction'] = $this->formatRestrictions($options['Restriction']);
        }

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $messages = $response->getItems()->getMessage();

        if ($messages === null) {
            $messages = array();
        }

        if (!is_array($messages)) {
            $messages = array($messages);
        }

        return $messages;
    }

    /**
     * @param Type\FolderIdType $folderId
     * @param array $options
     * @return Type\MessageType[]
     */
    public function getUnreadMailItems($folderId = null, $options = array())
    {
        $unReadOption = array(
            'Restriction' => array(
                'IsEqualTo' => array(
                    'IsRead' => false
                )
            )
        );

        $options = array_replace_recursive($unReadOption, $options);

        return $this->getMailItems($folderId, $options);
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
     * @param $isRead boolean
     */
    public function markMailAsRead($mailItem, $isRead = true)
    {
        if ($mailItem instanceof Type\MessageType) {
            $mailItem = $mailItem->getItemId();
        }

        $this->updateMailItem($mailItem, array(
            'IsRead' => $isRead
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
            ),
            'AttachmentShape' => array(
                'IncludeMimeContent' => true
            )
        );

        $attachment = $this->getClient()->GetAttachment($request);
        return $attachment;
    }
}
