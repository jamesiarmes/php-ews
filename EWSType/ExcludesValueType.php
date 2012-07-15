<?php
/**
 * Definition of the ExcludesValueType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExcludesValueType type
 */
class EWSType_ExcludesValueType extends EWSType
{
    /**
     * Value property
     *
     * @var EWSType_ExcludesAttributeType
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
                'type' => 'ExcludesAttributeType',
            ),
        );
    }
}
