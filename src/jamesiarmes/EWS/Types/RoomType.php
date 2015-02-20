<?php
/**
 * Contains RoomType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a meeting room.
 *
 * @package jamesiarmes\EWS\Types
 */
class RoomType extends EWSType
{
    /**
     * An identifier that contains an email address and display name that
     * represents the meeting room.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $Id;
}
