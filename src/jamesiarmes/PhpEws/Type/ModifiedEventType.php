<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ModifiedEventType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an event in which an item or folder is modified.
 *
 * @package php-ews\Type
 */
class ModifiedEventType extends BaseObjectChangedEventType
{
    /**
     * Represents the count of unread items within a given folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $UnreadCount;
}
