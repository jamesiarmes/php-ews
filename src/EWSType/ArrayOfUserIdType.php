<?php
/**
 * Contains EWSType_ArrayOfUserIdType.
 */

/**
 * Defines an array of delegate users to get or remove from a principal's
 * mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfUserIdType extends EWSType
{
    /**
     * Identifies a delegate to get or remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_UserIdType
     */
    public $UserId;
}
