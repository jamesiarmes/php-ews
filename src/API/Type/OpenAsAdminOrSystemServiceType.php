<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OpenAsAdminOrSystemServiceType
 *
 *
 * XSD Type: OpenAsAdminOrSystemServiceType
 *
 * @method OpenAsAdminOrSystemServiceType getLogonType()
 * @method OpenAsAdminOrSystemServiceType setLogonType(string $logonType)
 * @method OpenAsAdminOrSystemServiceType getConnectingSID()
 * @method OpenAsAdminOrSystemServiceType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class OpenAsAdminOrSystemServiceType extends Type
{

    /**
     * @property string $logonType
     */
    protected $logonType = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ConnectingSIDType $connectingSID
     */
    protected $connectingSID = null;
}
