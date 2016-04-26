<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ItemInfoResponseMessageType
 *
 *
 * XSD Type: ItemInfoResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType getItems()
 * @method ItemInfoResponseMessageType setItems(\jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType $items)
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;
}
