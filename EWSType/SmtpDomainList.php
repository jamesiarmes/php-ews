<?php
/**
 * Contains EWSType_SmtpDomainList.
 */

/**
 * Identifies a list of internal SMTP domains of the organization.
 *
 * @package php-ews\Types
 */
class EWSType_SmtpDomainList extends EWSType
{
    /**
     * Identifies a single SMTP domain.
     *
     * @since Exchange 2010
     *
     * @var EWSType_SmtpDomain
     */
    public $Domain;
}
