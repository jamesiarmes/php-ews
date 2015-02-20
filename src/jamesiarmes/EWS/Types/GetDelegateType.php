<?php
/**
 * Contains GetDelegateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get information about delegates to a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateType.
 */
class GetDelegateType extends EWSType
{
    /**
     * Indicates whether the response contains permission settings for each
     * delegate user.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IncludePermissions;

    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contains an array of delegate users to get from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfUserIdType
     */
    public $UserIds;
}
