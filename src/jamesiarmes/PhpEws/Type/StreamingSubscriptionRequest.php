<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\StreamingSubscriptionRequest.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a subscription to a streaming event notification subscription.
 *
 * @package php-ews\Type
 */
class StreamingSubscriptionRequest extends Type
{
    /**
     * Contains a collection of event notifications that are used to create a
     * subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to monitor for event notifications.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Indicates whether the server will subscribe to all folders in the user's
     * mailbox.
     *
     * A value of true indicates that the server will subscribe.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $SubscribeToAllFolders;
}
