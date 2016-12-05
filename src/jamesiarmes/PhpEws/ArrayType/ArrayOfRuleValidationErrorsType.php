<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleValidationErrorsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleValidationErrorsType extends ArrayType
{
    /**
     * Represents a single validation error on a particular rule property value,
     * predicate property value, or action property value.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleValidationErrorType[]
     */
    public $Error = array();
}
