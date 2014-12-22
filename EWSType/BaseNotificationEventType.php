<?php
/**
 * Contains EWSType_BaseNotificationEventType.
 */

/**
 * Represents a notification that no new activity has occurred in the mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_BaseNotificationEventType extends EWSType
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
