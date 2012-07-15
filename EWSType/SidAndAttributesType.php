<?php
/**
 * Definition of the SidAndAttributesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SidAndAttributesType type
 */
class EWSType_SidAndAttributesType extends EWSType
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var EWSType_unsignedInt
     */
    public $Attributes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SecurityIdentifier',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Attributes',
                'required' => false,
                'type' => 'unsignedInt',
            ),
        );
    }
}
