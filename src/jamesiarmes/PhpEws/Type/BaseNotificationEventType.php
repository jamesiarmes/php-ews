<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseNotificationEventType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a notification that no new activity has occurred in the mailbox.
 *
 * @package php-ews\Type
 */
class BaseNotificationEventType extends Type
{
    /**
     * Represents the last valid watermark for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we need a WatermarkType.
     */
    public $Watermark;
}
