<?php
/**
 * Contains EWSType_ArrayOfRoomsType.
 */

/**
 * Represents one or more meeting rooms.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRoomsType extends EWSType
{
    /**
     * Defines an e-mail address and display name that represents a meeting
     * room.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RoomType
     */
    public $Room;
}
