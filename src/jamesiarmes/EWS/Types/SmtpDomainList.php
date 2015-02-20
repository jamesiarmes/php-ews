<?php
/**
 * Contains SmtpDomainList.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a list of internal SMTP domains of the organization.
 *
 * @package jamesiarmes\EWS\Types
 */
class SmtpDomainList extends EWSType
{
    /**
     * Identifies a single SMTP domain.
     *
     * @since Exchange 2010
     *
     * @var SmtpDomain
     */
    public $Domain;
}
