<?php

namespace jamesiarmes\PEWS;

use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\Enumeration;

/**
 * A base class for APIs
 *
 * Class BaseAPI
 * @package jamesiarmes\PEWS
 */
class BaseAPI
{
    /**
     * Storing the API client
     * @var \jamesiarmes\PEWS\API\ExchangeWebServices
     */
    private $_client;

    /**
     * Set the API client
     *
     * @param $client
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

    /**
     * Get a folder by it's distinguishedId
     *
     * @param $distinguishedId
     * @return mixed
     */
    public function getFolder($distinguishedId)
    {
        $request = array(
            'FolderShape' => array(
                'BaseShape' => array('_' => 'Default')
            ),
            'FolderIds' => array(
                'DistinguishedFolderId' => array(
                    'Id' => $distinguishedId
                )
            )
        );
        $request = Type::buildFromArray($request);

        $response =  $this->getClient()->GetFolder($request);
        return $response->ResponseMessages->GetFolderResponseMessage->Folders;
    }
}
