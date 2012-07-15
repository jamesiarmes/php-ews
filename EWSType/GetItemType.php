<?php
/**
 * Definition of the GetItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetItemType type
 */
class EWSType_GetItemType extends EWSType
{
    /**
     * ItemShape property
     *
     * @var EWSType_ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemShape',
                'required' => false,
                'type' => 'ItemResponseShapeType',
            ),
            array(
                'name' => 'ItemIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfBaseItemIdsType',
            ),
        );
    }
}
