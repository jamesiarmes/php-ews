<?php
/**
 * Contains EWSType_ConstantValueType.
 */

/**
 * Identifies a constant value in a restriction.
 *
 * @package php-ews\Types
 */
class EWSType_ConstantValueType extends EWSType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
