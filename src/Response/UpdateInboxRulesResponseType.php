<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\UpdateInboxRulesResponseType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to an UpdateInboxRules request.
 *
 * @package php-ews\Response
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{
    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleOperationErrorsType
     */
    public $RuleOperationErrors;
}
