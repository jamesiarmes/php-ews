<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method UploadItemsType addItems(\jamesiarmes\PEWS\API\Type\UploadItemType $items)
 * @method \jamesiarmes\PEWS\API\Type\UploadItemType[] getItems()
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UploadItemType[]
     */
    protected $items = null;
}
