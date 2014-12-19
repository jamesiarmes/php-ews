<?php
/**
 * Contains EWSType_OccurrenceInfoType.
 */

/**
 * Represents an occurrence of a recurring calendar item.
 *
 * @package php-ews\Types
 */
class EWSType_OccurrenceInfoType extends EWSType
{
    /**
     * Represents the end time of the first occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * Contains the unique identifier and change key of the first occurrence of
     * a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Represents the original start time of the first occurrence of a recurring
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $OriginalStart;

    /**
     * Represents the start time of the first occurrence of a recurring calendar
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
