<?php
/**
 * Definition of the CalendarViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarViewType type
 */
class EWSType_CalendarViewType extends EWSType
{
    /**
     * StartDate property
     *
     * @var EWSType_dateTime
     *
     * @todo Make a DateTime object.
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * @var EWSType_dateTime
     *
     * @todo Make a DateTime object.
     */
    public $EndDate;
}
