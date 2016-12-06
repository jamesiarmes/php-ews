<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FieldURIOrConstantType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents either a property or a constant value to be used when comparing
 * with another property.
 *
 * @package php-ews\Type
 */
class FieldURIOrConstantType extends SearchExpressionType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ConstantValueType
     */
    public $Constant;
}
