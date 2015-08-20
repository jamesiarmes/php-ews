<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemIdType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $itemId)
 * @method string getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
