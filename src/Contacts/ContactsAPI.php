<?php

namespace jamesiarmes\PEWS\Contacts;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Type;

class ContactsAPI extends API
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
            $this->folderId = $this->getFolderByDistinguishedId('contacts')->getFolderId();
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
     * @param Type\FolderIdType $folderId
     * @param array $options
     * @return Type
     */
    public function getContacts($folderId = null, $options = array())
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

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        return $this->getClient()->FindItem($request);
    }
}
