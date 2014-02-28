<?php
/**
 * Definition of the TimeZoneType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TimeZoneType type
 */
class TimeZoneType extends PhpEws\EWSType
{
    /**
     * BaseOffset property
     *
     * @var duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * @var TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * @var TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
