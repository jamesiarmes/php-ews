<?php
/**
 * Contains EWSType_SmtpDomain.
 */

/**
 * Represents a single SMTP domain.
 *
 * @package php-ews\Types
 */
class EWSType_SmtpDomain extends EWSType
{
    /**
     * Identifies the name of a domain.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Indicates whether subdomains of the domain identified by the Name
     * attribute are considered internal.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IncludeSubdomains;
}
