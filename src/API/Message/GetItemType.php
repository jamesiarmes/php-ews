<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method GetItemType getItemShape()
 * @method GetItemType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method GetItemType getItemIds()
 * @method GetItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;
}
