<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemIdType getItemId()
 * @method PlayOnPhoneType setItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $itemId)
 * @method string getDialString()
 * @method PlayOnPhoneType setDialString(string $dialString)
 */
class PlayOnPhoneType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $dialString = null;
}
