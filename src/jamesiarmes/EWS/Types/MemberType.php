<?php
/**
 * Contains MemberType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a member of a distribution list.
 *
 * @package jamesiarmes\EWS\Types
 */
class MemberType extends EWSType
{
    /**
     * Provides a unique identifier for the distribution list member.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Key;

    /**
     * Represents the e-mail address of the distribution list member.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Provides information about the status of a distribution list member.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var MemberStatusType
     */
    public $Status;
}
