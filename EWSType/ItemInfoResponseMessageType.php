<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemInfoResponseMessageType type
 */
class EWSType_ItemInfoResponseMessageType extends EWSType
{
    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Items',
                'required' => false,
                'type' => 'ArrayOfRealItemsType',
            ),
        );
    }
}
