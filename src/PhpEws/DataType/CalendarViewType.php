<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarViewType type
 */
class CalendarViewType extends DataType
{
    /**
     * StartDate property
     *
     * @var EWSType_dateTime
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * @var EWSType_dateTime
     */
    public $EndDate;
}
