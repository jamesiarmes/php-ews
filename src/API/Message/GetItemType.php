<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemResponseShapeType getItemShape()
 * @method GetItemType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method GetItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
