<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConnectingSIDType
 *
 *
 * XSD Type: ConnectingSIDType
 *
 * @method ConnectingSIDType getPrincipalName()
 * @method ConnectingSIDType setPrincipalName(string $principalName)
 * @method ConnectingSIDType getSID()
 * @method ConnectingSIDType setSID(string $sID)
 * @method ConnectingSIDType getPrimarySmtpAddress()
 * @method ConnectingSIDType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method ConnectingSIDType getSmtpAddress()
 * @method ConnectingSIDType setSmtpAddress(string $smtpAddress)
 */
class ConnectingSIDType extends Type
{

    /**
     * @property string $principalName
     */
    protected $principalName = null;

    /**
     * @property string $sID
     */
    protected $sID = null;

    /**
     * @property string $primarySmtpAddress
     */
    protected $primarySmtpAddress = null;

    /**
     * @property string $smtpAddress
     */
    protected $smtpAddress = null;


}

