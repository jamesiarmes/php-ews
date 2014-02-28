<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends PhpEws\EWSType
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
