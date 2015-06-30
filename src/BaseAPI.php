<?php

namespace jamesiarmes\PEWS;

use jamesiarmes\PEWS\API\ExchangeWebServices;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\Enumeration;

class BaseAPI
{
    private $_client;

    public function setClient($client)
    {
        $this->_client = $client;
        return $this;
    }

    /**
     * @return ExchangeWebServices
     */
    public function getClient()
    {
        return $this->_client;
    }

    public function buildClient($server, $username, $password, $version = ExchangeWebServices::VERSION_2010)
    {
        $client = new ExchangeWebServices($server, $username, $password, $version);
        $this->setClient($client);

        return $this;
    }

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
}
