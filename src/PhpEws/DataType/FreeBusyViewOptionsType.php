<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FreeBusyViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptionsType extends DataType
{
    /**
     * TimeWindow property
     *
     * @var EWSType_Duration
     */
    public $TimeWindow;

    /**
     * MergedFreeBusyIntervalInMinutes property
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * RequestedView property
     *
     * @var EWSType_FreeBusyViewType
     */
    public $RequestedView;
}
