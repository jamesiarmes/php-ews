<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptionsType extends DataType
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
