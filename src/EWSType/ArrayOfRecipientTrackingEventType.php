<?php
/**
 * Contains EWSType_ArrayOfRecipientTrackingEventType.
 */

/**
 * Represents a collection of one or more events for a message.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRecipientTrackingEventType extends EWSType
{
    /**
     * Contains details for a specific event in the tracking report.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RecipientTrackingEventType
     */
    public $RecipientTrackingEvent;
}
