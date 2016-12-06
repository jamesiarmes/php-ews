<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleOperationErrorsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleOperationErrorsType extends ArrayType
{
    /**
     * Represents a rule operation error.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleOperationErrorType[]
     */
    public $RuleOperationError = array();
}
