<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetRoomsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to get a list of rooms within a particular room list.
 *
 * @package php-ews\Request
 */
class GetRoomsType extends BaseRequestType
{
    /**
     * Represents an e-mail address that identifies a list of meeting rooms.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $RoomList;
}
