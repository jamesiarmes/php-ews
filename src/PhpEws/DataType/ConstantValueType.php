<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * The Constant element identifies a constant value in a restriction.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Specifies the value to compare in the restriction.
 */
class ConstantValueType extends DataType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @var string
     */
    public $Value;
}
