<?php
/**
 * Definition of the ArrayOfGroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfGroupedItemsType type
 */
class EWSType_ArrayOfGroupedItemsType extends EWSType
{
    /**
     * GroupedItems property
     *
     * @var EWSType_GroupedItemsType
     */
    public $GroupedItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'GroupedItems',
                'required' => false,
                'type' => 'GroupedItemsType',
            ),
        );
    }
}
