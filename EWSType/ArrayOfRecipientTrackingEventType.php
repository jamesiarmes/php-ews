<?php
/**
 * Contains EWSType_ArrayOfRecipientTrackingEventType.
 */

/**
 * Represents a collection of one or more events for a message.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfRecipientTrackingEventType extends EWSType
{
    /**
     * Contains details for a specific event in the tracking report.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RecipientTrackingEventType
     */
    public $RecipientTrackingEvent;
}
