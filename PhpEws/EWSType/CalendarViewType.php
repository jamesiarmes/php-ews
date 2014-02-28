<?php
/**
 * Definition of the CalendarViewType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CalendarViewType type
 */
class CalendarViewType extends PhpEws\EWSType
{
    /**
     * StartDate property
     *
     * @var dateTime
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * @var dateTime
     */
    public $EndDate;
}
