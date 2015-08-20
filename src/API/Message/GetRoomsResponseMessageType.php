<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetRoomsResponseMessageType
 *
 *
 * XSD Type: GetRoomsResponseMessageType
 *
 * @method array getRooms()
 * @method GetRoomsResponseMessageType setRooms(array $rooms)
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RoomType[]
     */
    protected $rooms = null;
}
