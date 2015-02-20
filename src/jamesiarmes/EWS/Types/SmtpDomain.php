<?php
/**
 * Contains SmtpDomain.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single SMTP domain.
 *
 * @package jamesiarmes\EWS\Types
 */
class SmtpDomain extends EWSType
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
