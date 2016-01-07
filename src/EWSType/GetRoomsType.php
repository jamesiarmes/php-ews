<?php
/**
 * Contains EWSType_GetRoomsType.
 */

/**
 * Represents a request to get a list of rooms within a particular room list.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetRoomsType extends EWSType
{
    /**
     * Represents an e-mail address that identifies a list of meeting rooms.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $RoomList;
}
