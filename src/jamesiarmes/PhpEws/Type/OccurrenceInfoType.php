<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\OccurrenceInfoType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an occurrence of a recurring calendar item.
 *
 * @package php-ews\Type
 */
class OccurrenceInfoType extends Type
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
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
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
