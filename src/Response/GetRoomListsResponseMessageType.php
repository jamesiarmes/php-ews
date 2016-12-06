<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetRoomListsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the response from a GetRoomLists Operation request.
 *
 * @package php-ews\Response
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of e-mail addresses and display names that represent
     * lists of meeting rooms.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressesType
     */
    public $RoomLists;
}
