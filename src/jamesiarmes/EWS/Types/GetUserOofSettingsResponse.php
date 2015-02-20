<?php
/**
 * Contains GetUserOofSettingsResponse.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response message and the Out of Office (OOF) settings for a
 * user.
 *
 * @package jamesiarmes\EWS\Types
 */
class GetUserOofSettingsResponse extends EWSType
{
    /**
     * Contains a value that identifies to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var ExternalAudience
     */
    public $AllowExternalOof;

    /**
     * Contains the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var UserOofSettings
     */
    public $OofSettings;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;
}
