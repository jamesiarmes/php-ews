<?php
/**
 * Contains SetUserOofSettingsResponse.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package jamesiarmes\EWS\Types
 */
class SetUserOofSettingsResponse extends EWSType
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;
}
