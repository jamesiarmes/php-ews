<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 *
 * @method ExportItemsType addItemIds(\jamesiarmes\PEWS\API\Type\ItemIdType $itemIds)
 * @method \jamesiarmes\PEWS\API\Type\ItemIdType[] getItemIds()
 * @method ExportItemsType setItemIds(array $itemIds)
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType[]
     */
    protected $itemIds = null;
}
