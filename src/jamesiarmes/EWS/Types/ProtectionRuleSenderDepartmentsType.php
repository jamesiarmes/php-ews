<?php
/**
 * Contains ProtectionRuleSenderDepartmentsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies that the department of the sender matches any of the specified
 * departments in the child Value (ProtectionRuleValueType) elements.
 *
 * @package jamesiarmes\EWS\Types
 */
class ProtectionRuleSenderDepartmentsType extends EWSType
{
    /**
     * Identifies a single sender department.
     *
     * @since Exchange 2010
     *
     * @var ProtectionRuleValueType
     */
    public $Value;
}
