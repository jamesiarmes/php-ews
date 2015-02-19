<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetRoomListsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the response from a GetRoomLists Operation request.
 *
 * @package php-ews\Types
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of e-mail addresses and display names that represent
     * lists of meeting rooms.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfEmailAddressesType
     */
    public $RoomLists;
}
