<?php
/**
 * Contains EWSType_CalendarItemCreateOrDeleteOperationType.
 */

/**
 * Describes how meeting requests are handled after they are created.
 *
 * @package php-ews\Enumerations
 */
class EWSType_CalendarItemCreateOrDeleteOperationType extends EWSType
{
    /**
     * The meeting request is sent to all attendees but is not saved in the Sent
     * Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    /**
     * The meeting request is sent to all attendees and a copy is saved in the
     * folder that is identified by the SavedItemFolderId element.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    /**
     * If the item is a meeting request, it is saved as a calendar item but not
     * sent.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_TO_NONE = 'SendToNone';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
