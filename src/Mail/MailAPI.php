<?php

namespace jamesiarmes\PEWS\Mail;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use \DateTime;

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

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $messages = $response->getItems()->getMessage();

        if (!is_array($messages)) {
            $messages = array($messages);
        }

        return $messages;
    }
}
