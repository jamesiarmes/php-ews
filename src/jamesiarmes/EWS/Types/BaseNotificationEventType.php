<?php
/**
 * Contains BaseNotificationEventType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a notification that no new activity has occurred in the mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class BaseNotificationEventType extends EWSType
{
    /**
     * Represents the last valid watermark for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Watermark;
}
