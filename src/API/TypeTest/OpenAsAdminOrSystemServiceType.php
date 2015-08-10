<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OpenAsAdminOrSystemServiceType
 *
 *
 * XSD Type: OpenAsAdminOrSystemServiceType
 *
 * @method OpenAsAdminOrSystemServiceType getLogonType()
 * @method OpenAsAdminOrSystemServiceType setLogonType($logonType)
 * @method OpenAsAdminOrSystemServiceType getConnectingSID()
 * @method OpenAsAdminOrSystemServiceType setConnectingSID($connectingSID)
 */
class OpenAsAdminOrSystemServiceType extends Type
{

    /**
     * @property string $logonType
     */
    protected $logonType = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ConnectingSIDType $connectingSID
     */
    protected $connectingSID = null;


}

