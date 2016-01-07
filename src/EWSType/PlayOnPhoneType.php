<?php
/**
 * Contains EWSType_PlayOnPhoneType.
 */

/**
 * Represents a request to read an item on a phone.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_PlayOnPhoneType extends EWSType
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
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
