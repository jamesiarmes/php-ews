<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConnectingSIDType
 *
 *
 * XSD Type: ConnectingSIDType
 *
 * @method ConnectingSIDType getPrincipalName()
 * @method ConnectingSIDType setPrincipalName($principalName)
 * @method ConnectingSIDType getSID()
 * @method ConnectingSIDType setSID($sID)
 * @method ConnectingSIDType getPrimarySmtpAddress()
 * @method ConnectingSIDType setPrimarySmtpAddress($primarySmtpAddress)
 * @method ConnectingSIDType getSmtpAddress()
 * @method ConnectingSIDType setSmtpAddress($smtpAddress)
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

