<?php
/**
 * Contains EWSType_ProtectionRuleSenderDepartmentsType.
 */

/**
 * Specifies that the department of the sender matches any of the specified
 * departments in the child Value (ProtectionRuleValueType) elements.
 *
 * @package php-ews\Types
 */
class EWSType_ProtectionRuleSenderDepartmentsType extends EWSType
{
    /**
     * Identifies a single sender department.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleValueType
     */
    public $Value;
}
