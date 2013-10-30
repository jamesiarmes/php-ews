<?php
/**
 * Contains EWSType_DeletedOccurrenceInfoType.
 */

/**
 * Represents a deleted occurrence of a recurring calendar item.
 *
 * @package php-ews\Types
 */
class EWSType_DeletedOccurrenceInfoType extends EWSType
{
    /**
     * Represents the start time of a deleted occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;
}
