<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UpdateInboxRulesResponseType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a response to an UpdateInboxRules request.
 *
 * @package php-ews\Types
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{
    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfRuleOperationErrorsType
     */
    public $RuleOperationErrors;
}
