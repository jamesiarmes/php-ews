<?php
/**
 * Definition of the FreeBusyViewOptionsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptionsType extends PhpEws\EWSType
{
    /**
     * TimeWindow property
     *
     * @var Duration
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
     * @var FreeBusyViewType
     */
    public $RequestedView;
}
