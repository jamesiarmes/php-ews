<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetRoomsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the response to a GetRooms operation request.
 *
 * @package php-ews\Response
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of email addresses and display names that represent
     * meeting rooms.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRoomsType
     */
    public $Rooms;
}
