<?php
/**
 * The Constant element identifies a constant value in a restriction.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Specifies the value to compare in the restriction.
 */
class EWSType_ConstantValueType extends EWSType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @var string
     */
    public $Value;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Value',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
