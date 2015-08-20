<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method ExportItemsResponseMessageType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId)
 * @method ExportItemsResponseMessageType getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property string $data
     */
    protected $data = null;


}

