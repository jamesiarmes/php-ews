<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientTrackingEventType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of one or more events for a message.
 *
 * @package php-ews\Array
 */
class ArrayOfRecipientTrackingEventType extends ArrayType
{
    /**
     * Contains details for a specific event in the tracking report.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RecipientTrackingEventType[]
     */
    public $RecipientTrackingEvent = array();
}
