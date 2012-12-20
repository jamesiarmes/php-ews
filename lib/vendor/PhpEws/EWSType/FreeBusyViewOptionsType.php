<?php
/**
 * Definition of the FreeBusyViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptionsType extends EWSType
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
