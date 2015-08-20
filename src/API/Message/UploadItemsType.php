<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method array getItems()
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UploadItemType[]
     */
    protected $items = null;
}
