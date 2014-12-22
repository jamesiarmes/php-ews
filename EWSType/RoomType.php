<?php
/**
 * Contains EWSType_RoomType.
 */

/**
 * Represents a meeting room.
 *
 * @package php-ews\Types
 */
class EWSType_RoomType extends EWSType
{
    /**
     * An identifier that contains an email address and display name that
     * represents the meeting room.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $Id;
}
