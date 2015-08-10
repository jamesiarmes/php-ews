<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method GetItemType getItemShape()
 * @method GetItemType setItemShape($itemShape)
 * @method GetItemType getItemIds()
 * @method GetItemType setItemIds($itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;


}

