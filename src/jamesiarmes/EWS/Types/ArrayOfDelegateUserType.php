<?php
/**
 * Contains ArrayOfDelegateUserType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the identities of delegates to add to or update in a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfDelegateUserType extends EWSType
{
    /**
     * Identifies a single delegate to add to or update in a mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateUserType
     */
    public $DelegateUser;
}
