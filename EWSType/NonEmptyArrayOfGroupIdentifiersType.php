<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 */
class EWSType_NonEmptyArrayOfGroupIdentifiersType extends EWSType
{
    /**
     * GroupIdentifier property
     *
     * @var EWSType_SidAndAttributesType
     */
    public $GroupIdentifier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'GroupIdentifier',
                'required' => false,
                'type' => 'SidAndAttributesType',
            ),
        );
    }
}
