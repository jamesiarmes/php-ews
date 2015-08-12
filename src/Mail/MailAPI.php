<?php

namespace jamesiarmes\PEWS\Mail;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;
use \DateTime;

class MailAPI extends API
{
    protected $folderId;

    public function getFolderId()
    {
        if (!$this->folderId) {
            $this->folderId = $this->getFolderByDistinguishedId('inbox')->FolderId;
        }

        return $this->folderId;
    }

    /**
     * Get all mail items in the inbox
     *
     * @param array $options
     * @return Type\Message[]
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
                    'Id' => $this->getFolderId()->Id,
                    'ChangeKey' => $this->getFolderId()->ChangeKey
                )
            )
        );

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $items = $response;
        if (!isset($items->Message)) {
            return array();
        }

        if (!is_array($items->Message)) {
            $items->Message = array($items->Message);
        }

        return $items->Message;
    }
}
