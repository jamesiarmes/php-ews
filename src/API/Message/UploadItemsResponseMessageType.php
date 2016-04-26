<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UploadItemsResponseMessageType
 *
 *
 * XSD Type: UploadItemsResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemIdType getItemId()
 * @method UploadItemsResponseMessageType setItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $itemId)
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;
}
