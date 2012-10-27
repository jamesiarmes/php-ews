<?php
/**
 * Contains EWSType_ArrayOfProtectionRulesType.
 */

/**
 * Represents an array of protection rules.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfProtectionRulesType extends EWSType
{
    /**
     * Contains a single protection rule.
     *
     * This element can occur zero or more times. This element occurs zero times
     * when no protection rules are defined by the organization. It occurs one
     * or more times if at least one rule is defined by the organization.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleType
     */
    public $Rule;
}
