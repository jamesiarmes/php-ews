<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method ExportItemsResponseMessageType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $itemId)
 * @method ExportItemsResponseMessageType getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property string $data
     */
    protected $data = null;
}
