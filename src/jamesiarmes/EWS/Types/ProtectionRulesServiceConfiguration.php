<?php
/**
 * Contains ProtectionRulesServiceConfiguration.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents service configuration information for the protection rules
 * service.
 *
 * @package jamesiarmes\EWS\Types
 */
class ProtectionRulesServiceConfiguration extends EWSType
{
    /**
     * Identifies the list of internal SMTP domains of the organization.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var SmtpDomainList
     */
    public $InternalDomains;

    /**
     * Specifies how often, in whole hours, the client should request protection
     * rules from the server.
     *
     * This attribute is required and its value must be an integer that is equal
     * to or greater than 1.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $RefreshInterval;

    /**
     * An array of protection rules.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfProtectionRulesType
     */
    public $Rules;
}
