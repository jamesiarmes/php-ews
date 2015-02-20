<?php
/**
 * Contains PhoneCallIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the identifier of a phone call.
 *
 * @package jamesiarmes\EWS\Types
 */
class PhoneCallIdType extends EWSType
{
    /**
     * Identifies the phone call to disconnect.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
