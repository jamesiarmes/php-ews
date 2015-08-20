<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExchangeImpersonationType
 *
 *
 * XSD Type: ExchangeImpersonationType
 *
 * @method ConnectingSIDType getConnectingSID()
 * @method ExchangeImpersonationType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class ExchangeImpersonationType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;
}
