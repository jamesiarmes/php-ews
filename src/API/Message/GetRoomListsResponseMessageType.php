<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method array getRoomLists()
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;
}
