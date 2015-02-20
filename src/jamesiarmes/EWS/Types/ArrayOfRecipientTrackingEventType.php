<?php
/**
 * Contains ArrayOfRecipientTrackingEventType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of one or more events for a message.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRecipientTrackingEventType extends EWSType
{
    /**
     * Contains details for a specific event in the tracking report.
     *
     * @since Exchange 2010
     *
     * @var RecipientTrackingEventType
     */
    public $RecipientTrackingEvent;
}
