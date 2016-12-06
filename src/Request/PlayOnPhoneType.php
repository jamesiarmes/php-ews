<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\PlayOnPhoneType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to read an item on a phone.
 *
 * @package php-ews\Request
 */
class PlayOnPhoneType extends BaseRequestType
{
    /**
     * Represents the dial string of the phone number that is called to play an
     * item by phone.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $DialString;

    /**
     * Represents the identifier of an item to play on a phone.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
