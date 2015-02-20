<?php
/**
 * Contains PlayOnPhoneType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to read an item on a phone.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class PlayOnPhoneType extends EWSType
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
     * @var ItemIdType
     */
    public $ItemId;
}
