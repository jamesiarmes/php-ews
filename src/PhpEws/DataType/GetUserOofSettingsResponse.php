<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends DataType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * OofSettings property
     *
     * @var UserOofSettings
     */
    public $OofSettings;

    /**
     * AllowExternalOof property
     *
     * @var ExternalAudience
     */
    public $AllowExternalOof;
}
