<?php
/**
 * Contains ArrayOfRoomsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents one or more meeting rooms.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRoomsType extends EWSType
{
    /**
     * Defines an e-mail address and display name that represents a meeting
     * room.
     *
     * @since Exchange 2010
     *
     * @var RoomType
     */
    public $Room;
}
