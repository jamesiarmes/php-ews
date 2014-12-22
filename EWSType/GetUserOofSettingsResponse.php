<?php
/**
 * Contains EWSType_GetUserOofSettingsResponse.
 */

/**
 * Represents the response message and the Out of Office (OOF) settings for a
 * user.
 *
 * @package php-ews\Types
 */
class EWSType_GetUserOofSettingsResponse extends EWSType
{
    /**
     * Contains a value that identifies to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExternalAudience
     */
    public $AllowExternalOof;

    /**
     * Contains the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var EWSType_UserOofSettings
     */
    public $OofSettings;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;
}
