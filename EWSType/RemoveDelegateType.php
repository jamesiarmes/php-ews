<?php
/**
 * Contains EWSType_RemoveDelegateType.
 */

/**
 * Defines a request to remove delegates from a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateType.
 */
class EWSType_RemoveDelegateType extends EWSType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Contains an array of delegate users to remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;
}
