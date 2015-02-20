<?php
/**
 * Contains ArrayOfUserIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines an array of delegate users to get or remove from a principal's
 * mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfUserIdType extends EWSType
{
    /**
     * Identifies a delegate to get or remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var UserIdType
     */
    public $UserId;
}
