<?php
/**
 * Definition of the ConstantValueType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConstantValueType type
 */
class EWSType_ConstantValueType extends EWSType
{
    /**
     * Value property
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
