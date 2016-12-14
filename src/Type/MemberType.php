<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MemberType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Represents a member of a distribution list.
 *
 * @package php-ews\Type
 */
class MemberType extends Type
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
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;

    /**
     * Provides information about the status of a distribution list member.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MemberStatusType
     */
    public $Status;
}
