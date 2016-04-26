<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\jamesiarmes\PEWS\API\Type\EmailAddressType $roomLists)
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType[] getRoomLists()
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;
}
