<?php
/**
 * Contains EWSType_PushSubscriptionRequestType.
 */

/**
 * Represents a subscription to a push-based event notification subscription.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseSubscriptionRequestType.
 */
class EWSType_PushSubscriptionRequestType extends EWSType
{
    /**
     * Contains a collection of event notifications that are used to create a
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to monitor for event notifications.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Represents the frequency, specified in minutes, at which notification
     * messages will be sent to the client when no events have occurred.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $StatusFrequency;

    /**
     * Indicates whether to subscribe to all available folders.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $SubscribeToAllFolders;

    /**
     * Represents the location of the client Web service for push notifications.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Url;

    /**
     * Represents an event bookmark in the mailbox events table.
     *
     * This is used to create a subscription starting at an event represented by
     * the watermark.
     *
     * If the watermark from a Subscribe request is not found, an error response
     * will be returned to the client. This may occur if the watermark is older
     * than 30 days or if the watermark was never present in the mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Watermark;
}
