<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getRoomList()
 * @method GetRoomsType setRoomList(\jamesiarmes\PEWS\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $roomList = null;
}
