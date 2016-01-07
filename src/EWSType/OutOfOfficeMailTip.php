<?php
/**
 * Contains EWSType_OutOfOfficeMailTip.
 */

/**
 * Represents the response message and a duration time for sending the response
 * message.
 *
 * @package php-ews\Types
 */
class EWSType_OutOfOfficeMailTip extends EWSType
{
    /**
     * Contains the duration that the OOF status is enabled if the OofState
     * element is set to Scheduled.
     *
     * @since Exchange 2010
     *
     * @var EWSType_Duration
     */
    public $Duration;

    /**
     * Contains an Out of Office (OOF) message and the language used for the
     * message.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ReplyBody
     */
    public $ReplyBody;
}
