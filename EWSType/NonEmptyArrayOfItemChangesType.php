<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 */
class EWSType_NonEmptyArrayOfItemChangesType extends EWSType
{
    /**
     * ItemChange property
     *
     * @var EWSType_ItemChangeType
     */
    public $ItemChange;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemChange',
                'required' => false,
                'type' => 'ItemChangeType',
            ),
        );
    }
}
