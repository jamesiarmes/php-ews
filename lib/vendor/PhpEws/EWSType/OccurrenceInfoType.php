<?php
/**
 * Definition of the OccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends EWSType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var EWSType_dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var EWSType_dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var EWSType_dateTime
     */
    public $OriginalStart;
}
