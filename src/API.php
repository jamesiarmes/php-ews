<?php

namespace jamesiarmes\PEWS;

use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\Calendar\CalendarAPI;

/**
 * A base class for APIs
 *
 * Class BaseAPI
 * @package jamesiarmes\PEWS
 */
class API
{
    private $_fieldUris = array();

    /**
     * Storing the API client
     * @var ExchangeWebServices
     */
    private $_client;

    public function setupFieldUris()
    {
        //So, since we have to pass in URI's of everything we update, we need to fetch them
        $reflection = new \ReflectionClass('jamesiarmes\PEWS\API\Enumeration\UnindexedFieldURIType');
        $constants = $reflection->getConstants();
        $constantsFound = array();

        //Loop through all URI's to list them in an array
        foreach ($constants as $constant) {
            $constantName = explode(":", $constant);
            $name = array_pop($constantName);

            if (!isset($constantsFound[$name])) {
                $constantsFound[$name] = array();
            }
            $constantsFound[$name][] = $constant;
        }

        $this->_fieldUris = $constantsFound;
    }

    public function getFieldUriByName($fieldName, $preferance = null)
    {
        if (empty($this->_fieldUris)) {
            $this->setupFieldUris();
        }

        if (!isset($this->_fieldUris[$fieldName])) {
            return false;
        }

        $constants = $this->_fieldUris[$fieldName];

        if (count($constants) == 1) {
            return $constants[0];
        }

        foreach ($constants as $constant) {
            $parts = explode(":", $constant);
            if ($parts[0] == $preferance) {
                return $constant;
            }
        }

        return $this->_fieldUris[$fieldName][0];
    }

    /**
     * Get a calendar item
     *
     * @param string $name
     * @return CalendarAPI
     */
    public function getCalendar($name = 'default.calendar')
    {
        $calendar = new CalendarAPI();
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
     * @param string $timezone
     * @param string $version
     * @return $this
     */
    public function buildClient(
        $server,
        $username,
        $password,
        $timezone = null,
        $version = ExchangeWebServices::VERSION_2010
    ) {
        $client = new ExchangeWebServices($server, $username, $password, $version);
        $client->setTimezone($timezone);
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

    public function deleteItems($items, $options = array())
    {
        if (!is_array($items) || Type::arrayIsAssoc($items)) {
            $items = array($items);
        }

        $itemIds = array();
        foreach ($items as $item) {
            $item = (array) $item;
            $itemIds[] = array(
                'Id' => $item['Id'],
                'ChangeKey' => $item['ChangeKey']
            );
        }

        $request = array(
            'ItemIds' => array('ItemId' => $itemIds),
            'DeleteType' => 'MoveToDeletedItems'
        );

        $request = array_merge($request, $options);
        $request = Type::buildFromArray($request);
        return $this->getClient()->DeleteItem($request);
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
        return $response;
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
        $folders = $this->getClient()->FindFolder($request);

        $types = get_object_vars($folders);

        foreach ($types as $k => $type) {
            if (!is_array($type)) {
                $type = array($type);
            }

            foreach ($type as $folder) {
                if (is_object($folder) && $folder->DisplayName == $folderName) {
                    return $folder;
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
        return $response;
    }
}
