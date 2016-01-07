<?php
/**
 * Contains EWSType_GetDelegateType.
 */

/**
 * Defines a request to get information about delegates to a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateType.
 */
class EWSType_GetDelegateType extends EWSType
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
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Contains an array of delegate users to get from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;
}
