<?php
/**
 * Contains EWSType_DelegateUserType.
 */

/**
 * Identifies a single delegate to add or update in a mailbox or a delegate
 * returned in a delegate management response.
 *
 * @package php-ews\Types
 */
class EWSType_DelegateUserType extends EWSType
{
    /**
     * Contains the delegate permission level settings.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * Indicates whether a delegate receives copies of meeting-related messages
     * that are addressed to the principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * Identifies the delegate.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_UserIdType
     */
    public $UserId;

    /**
     * Indicates whether a delegate has permission to view private calendar
     * items in the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
