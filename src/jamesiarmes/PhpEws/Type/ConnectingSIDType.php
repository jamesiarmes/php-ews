<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConnectingSIDType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an account to impersonate when you are using the
 * ExchangeImpersonation SOAP header.
 *
 * @package php-ews\Type
 */
class ConnectingSIDType extends Type
{
    /**
     * Represents the primary Simple Mail Transfer Protocol (SMTP) address of
     * the account to use for Exchange impersonation.
     *
     * If the primary SMTP address is supplied, it will cost an extra Active
     * Directory directory service lookup in order to obtain the SID of the
     * user. We recommend that you use the SID or UPN if they are available.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PrimarySmtpAddress;

    /**
     * Represents the user principal name (UPN) of the account to use for
     * impersonation.
     *
     * This should be the UPN for the domain where the user account exists.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PrincipalName;

    /**
     * Represents the security descriptor definition language (SDDL) form of the
     * security identifier (SID) for the account to use for impersonation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SID;

    /**
     * Represents the Simple Mail Transfer Protocol (SMTP) address of the
     * account to use for Exchange Impersonation.
     *
     * If the SMTP address is supplied, it will cost an extra Active Directory
     * lookup in order to obtain the SID of the user. We recommend that you use
     * the SID or UPN if they are available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SmtpAddress;
}
