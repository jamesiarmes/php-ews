<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRoomsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents one or more meeting rooms.
 *
 * @package php-ews\Array
 */
class ArrayOfRoomsType extends ArrayType
{
    /**
     * Defines an e-mail address and display name that represents a meeting
     * room.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RoomType[]
     */
    public $Room = array();
}
