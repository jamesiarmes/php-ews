<?php
/**
 * Contains EWSType_SetUserOofSettingsResponse.
 */

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package php-ews\Types
 */
class EWSType_SetUserOofSettingsResponse extends EWSType
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;
}
