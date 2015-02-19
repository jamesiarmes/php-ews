<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetRoomsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the response to a GetRooms operation request.
 *
 * @package php-ews\Types
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of email addresses and display names that represent
     * meeting rooms.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfRoomsType
     */
    public $Rooms;
}
