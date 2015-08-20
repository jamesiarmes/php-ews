<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConnectingSIDType
 *
 *
 * XSD Type: ConnectingSIDType
 *
 * @method string getPrincipalName()
 * @method ConnectingSIDType setPrincipalName(string $principalName)
 * @method string getSID()
 * @method ConnectingSIDType setSID(string $sID)
 * @method string getPrimarySmtpAddress()
 * @method ConnectingSIDType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method string getSmtpAddress()
 * @method ConnectingSIDType setSmtpAddress(string $smtpAddress)
 */
class ConnectingSIDType extends Type
{

    /**
     * @var string
     */
    protected $principalName = null;

    /**
     * @var string
     */
    protected $sID = null;

    /**
     * @var string
     */
    protected $primarySmtpAddress = null;

    /**
     * @var string
     */
    protected $smtpAddress = null;
}
