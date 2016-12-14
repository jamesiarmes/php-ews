<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserIdType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies a delegate user or a user who has folder access permissions.
 *
 * @package php-ews\Type
 */
class UserIdType extends Type
{
    /**
     * Defines the display name of a folder, contact, distribution list, or
     * delegate user.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Identifies Anonymous and Default user accounts for delegate access.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DistinguishedUserType
     */
    public $DistinguishedUser;

    /**
     * Identifies an external delegate user or an external user who has folder
     * access permissions.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $ExternalUserIdentity;

    /**
     * Represents the primary Simple Mail Transfer Protocol (SMTP) address of an
     * account to be used for delegate access.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $PrimarySmtpAddress;

    /**
     * Represents the security descriptor definition language (SDDL) form of the
     * security identifier (SID).
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $SID;
}
