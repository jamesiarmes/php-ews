<?php
/**
 * Contains EWSType_RemoveItemType.
 */

/**
 * Represents a response object that is used to remove a meeting item when a
 * MeetingCancellation message is received.
 *
 * @package php-ews\Types
 */
class EWSType_RemoveItemType extends EWSType {
    /**
     * Represents the name of the RemoveItem reply object class as an English
     * string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ObjectName;

    /**
     * Identifies the item to which the RemoveItem response object refers.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;
}
