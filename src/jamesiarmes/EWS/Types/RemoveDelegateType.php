<?php
/**
 * Contains RemoveDelegateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to remove delegates from a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateType.
 */
class RemoveDelegateType extends EWSType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contains an array of delegate users to remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfUserIdType
     */
    public $UserIds;
}
