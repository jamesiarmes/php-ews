<?php
/**
 * The Constant element identifies a constant value in a restriction.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Specifies the value to compare in the restriction.
 */
class ConstantValueType extends PhpEws\EWSType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @var string
     */
    public $Value;
}
