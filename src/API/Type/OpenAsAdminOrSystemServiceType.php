<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OpenAsAdminOrSystemServiceType
 *
 *
 * XSD Type: OpenAsAdminOrSystemServiceType
 *
 * @method string getLogonType()
 * @method OpenAsAdminOrSystemServiceType setLogonType(string $logonType)
 * @method ConnectingSIDType getConnectingSID()
 * @method OpenAsAdminOrSystemServiceType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class OpenAsAdminOrSystemServiceType extends Type
{

    /**
     * @var string
     */
    protected $logonType = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;
}
