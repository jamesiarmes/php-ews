<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method GetRoomsType getRoomList()
 * @method GetRoomsType setRoomList(\jamesiarmes\PEWS\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $roomList
     */
    protected $roomList = null;
}
