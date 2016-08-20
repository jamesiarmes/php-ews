<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SmtpDomainList.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies a list of internal SMTP domains of the organization.
 *
 * @package php-ews\Type
 */
class SmtpDomainList extends Type
{
    /**
     * Identifies a single SMTP domain.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\SmtpDomain
     */
    public $Domain;
}
