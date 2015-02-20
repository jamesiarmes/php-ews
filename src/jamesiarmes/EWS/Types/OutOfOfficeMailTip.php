<?php
/**
 * Contains OutOfOfficeMailTip.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response message and a duration time for sending the response
 * message.
 *
 * @package jamesiarmes\EWS\Types
 */
class OutOfOfficeMailTip extends EWSType
{
    /**
     * Contains the duration that the OOF status is enabled if the OofState
     * element is set to Scheduled.
     *
     * @since Exchange 2010
     *
     * @var Duration
     */
    public $Duration;

    /**
     * Contains an Out of Office (OOF) message and the language used for the
     * message.
     *
     * @since Exchange 2010
     *
     * @var ReplyBody
     */
    public $ReplyBody;
}
