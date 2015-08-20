<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 *
 * @method array getItemIds()
 * @method ExportItemsType setItemIds(array $itemIds)
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType[]
     */
    protected $itemIds = null;
}
