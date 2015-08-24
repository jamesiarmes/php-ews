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
    public static function fromEmailAddress($emailAddress)
    {
        $impersonation = new static();
        $connectingSID = new ConnectingSIDType();
        $connectingSID->setPrimarySmtpAddress($emailAddress);

        $impersonation->setConnectingSID($connectingSID);
        return $impersonation;
    }

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;
}
