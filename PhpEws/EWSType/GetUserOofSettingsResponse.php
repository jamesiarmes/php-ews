<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends EWSType
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
