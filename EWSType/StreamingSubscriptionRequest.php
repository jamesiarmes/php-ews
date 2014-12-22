<?php
/**
 * Contains EWSType_StreamingSubscriptionRequest.
 */

/**
 * Represents a subscription to a streaming event notification subscription.
 *
 * @package php-ews\Types
 */
class EWSType_StreamingSubscriptionRequest extends EWSType
{
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

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to monitor for event notifications.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Contains a collection of event notifications that are used to create a
     * subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;
}
