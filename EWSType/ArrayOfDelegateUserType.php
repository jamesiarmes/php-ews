<?php
/**
 * Contains EWSType_ArrayOfDelegateUserType.
 */

/**
 * Contains the identities of delegates to add to or update in a mailbox.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfDelegateUserType extends EWSType
{
    /**
     * Identifies a single delegate to add to or update in a mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\DelegateUserType
     */
    public $DelegateUser;
}
