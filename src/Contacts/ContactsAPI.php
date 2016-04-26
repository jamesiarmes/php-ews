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
     * @return Type\ContactItemType[]
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

    /**
     * @param $contacts
     * @param array $options
     * @return Type\ItemIdType[]
     */
    public function createContacts($contacts, $options = array())
    {
        $request = array('Contact' => $contacts);

        $defaultOptions = array(
            'MessageDisposition' => 'SaveOnly',
            'SavedItemFolderId' => array('FolderId' => $this->getFolderId()->toArray())
        );
        $options = array_replace_recursive($defaultOptions, $options);

        $result = $this->createItems($request, $options);

        if (!is_array($result)) {
            $result = array($result);
        }

        return $result;
    }

    public function updateContactItem(Type\ItemIdType $itemId, $changes)
    {
        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => $itemId->toArray(),
                'Updates' => array(
                    'SetItemField' => $this->buildUpdateItemChanges('Contact', 'contacts', $changes)
                )
            )
        );

        $options = array();

        $items = $this->updateItems($request, $options);

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }
}
