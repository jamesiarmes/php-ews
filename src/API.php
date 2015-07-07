<?php

namespace jamesiarmes\PEWS;

use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\Calendar\Calendar;

/**
 * A base class for APIs
 *
 * Class BaseAPI
 * @package jamesiarmes\PEWS
 */
class API
{
    private $_fieldUris;

    /**
     * Storing the API client
     * @var ExchangeWebServices
     */
    private $_client;

    public function getFieldUriByName($fieldName)
    {
        if (!$this->_fieldUris) {
            //So, since we have to pass in URI's of everything we update, we need to fetch them
            $reflection = new \ReflectionClass('jamesiarmes\PEWS\API\Enumeration\UnindexedFieldURIType');
            $constants = $reflection->getConstants();
            $constantsFound = array();

            //Loop through all URI's to list them in an array
            foreach ($constants as $constant) {
                $constantName = explode(":", $constant);
                $name = array_pop($constantName);
                $constantsFound[$name] = $constant;
            }

            $this->_fieldUris = $constantsFound;
        }

        if (!isset($this->_fieldUris[$fieldName])) {
            return false;
        }

        return $this->_fieldUris[$fieldName];
    }

    /**
     * Get a calendar item
     *
     * @param string $name
     * @return Calendar
     */
    public function getCalendar($name = 'default.calendar')
    {
        $calendar = new Calendar();
        $calendar->setClient($this->getClient());
        $calendar->pickCalendar($name);

        return $calendar;
    }

    /**
     * Set the API client
     *
     * @param ExchangeWebServices $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->_client = $client;
        return $this;
    }

    /**
     * Get the API client
     *
     * @return ExchangeWebServices
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Instantiate and set a client (ExchangeWebServices) based on the parameters given
     *
     * @param $server
     * @param $username
     * @param $password
     * @param string $version
     * @return $this
     */
    public function buildClient($server, $username, $password, $version = ExchangeWebServices::VERSION_2010)
    {
        $client = new ExchangeWebServices($server, $username, $password, $version);
        $this->setClient($client);

        return $this;
    }

    /**
     * Create items through the API client
     *
     * @param $items
     * @param array $options
     * @return API\CreateItemResponseType
     */
    public function createItems($items, $options = array())
    {
        if (!is_array($items)) {
            $items = array($items);
        }

        $request = array(
            'Items' => $items
        );

        $request = array_merge($request, $options);
        $request = Type::buildFromArray($request);

        $response = $this->getClient()->CreateItem($request);

        return $response;
    }

    public function updateItems($items, $options = array())
    {
        $request = array(
            'ItemChanges' => $items,
            'MessageDisposition' => 'SaveOnly',
            'ConflictResolution' => 'AlwaysOverwrite'
        );

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);

        return $this->getClient()->UpdateItem($request);
    }

    public function getFolder($identifier)
    {
        $request = array(
            'FolderShape' => array(
                'BaseShape' => array('_' => 'Default')
            ),
            'FolderIds' => $identifier
        );
        $request = Type::buildFromArray($request);

        $response = $this->getClient()->GetFolder($request);
        return $response->ResponseMessages->GetFolderResponseMessage->Folders;
    }

    /**
     * Get a folder by it's distinguishedId
     *
     * @param string $distinguishedId
     * @return mixed
     */
    public function getFolderByDistinguishedId($distinguishedId)
    {
        return $this->getFolder(array(
            'DistinguishedFolderId' => array(
                'Id' => $distinguishedId
            )
        ));
    }

    public function getFolderByFolderId($folderId)
    {
        return $this->getFolder(array(
            'FolderId' => array('Id'=>$folderId)
        ));
    }

    public function getFolderByDisplayName($folderName, $parentFolder = 'root', $options = array())
    {
        $request = array(
            'Traversal' => 'Shallow',
            'FolderShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => array(
                'DistinguishedFolderId' => array('Id'=>$parentFolder)
            )
        );

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindFolder($request);

        $folders = $response->ResponseMessages->FindFolderResponseMessage->RootFolder->Folders;
        $types = get_object_vars($folders);

        foreach ($types as $type) {
            if (!is_array($type) && is_object($type) && $type->DisplayName == $folderName) {
                return $type;
            }

            if (is_array($type)) {
                foreach ($type as $folder) {
                    if ($folder->DisplayName == $folderName) {
                        return $folder;
                    }
                }
            }
        }

        return false;
    }

    /**
     * Get a list of sync changes on a folder
     *
     * @param string $folderId
     * @param null $syncState
     * @param array $options
     * @return mixed
     */
    public function listItemChanges($folderId, $syncState = null, $options = array())
    {
        $request = array(
            'ItemShape' => array('BaseShape' => 'IdOnly'),
            'SyncFolderId' => array('FolderId' => array('Id'=>$folderId)),
            'SyncScope' => 'NormalItems',
            'MaxChangesReturned' => '10'
        );

        if ($syncState != null) {
            $request['SyncState'] = $syncState;
            $request['ItemShape']['BaseShape'] = 'AllProperties';
        }

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->SyncFolderItems($request);
        return $response->ResponseMessages->SyncFolderItemsResponseMessage;
    }
}
