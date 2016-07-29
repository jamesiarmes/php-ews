<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RuleOperationErrorType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a rule operation error.
 *
 * @package php-ews\Type
 */
class RuleOperationErrorType extends Type
{
    /**
     * Indicates the index of the operation in the request that caused the rule
     * operation error.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $OperationIndex;

    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleValidationErrorsType
     */
    public $ValidationErrors;
}
