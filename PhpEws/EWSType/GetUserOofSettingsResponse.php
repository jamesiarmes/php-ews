<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class EWSType_GetUserOofSettingsResponse extends EWSType
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
