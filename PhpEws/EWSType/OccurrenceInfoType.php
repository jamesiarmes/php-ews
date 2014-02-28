<?php
/**
 * Definition of the OccurrenceInfoType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends PhpEws\EWSType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var dateTime
     */
    public $OriginalStart;
}
