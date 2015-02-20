<?php
/**
 * Contains GetRoomsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to get a list of rooms within a particular room list.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetRoomsType extends EWSType
{
    /**
     * Represents an e-mail address that identifies a list of meeting rooms.
     *
     * @since Exchange 2010 SP1
     *
     * @var EmailAddressType
     */
    public $RoomList;
}
