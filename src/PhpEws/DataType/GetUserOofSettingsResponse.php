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
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * OofSettings property
     *
     * @var EWSType_UserOofSettings
     */
    public $OofSettings;

    /**
     * AllowExternalOof property
     *
     * @var EWSType_ExternalAudience
     */
    public $AllowExternalOof;
}
