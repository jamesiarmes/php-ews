<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\CalendarItemTypeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of a calendar item.
 *
 * @package php-ews\Enumeration
 */
class CalendarItemTypeType extends Enumeration
{
    /**
     * The item is an exception to a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXCEPTION = 'Exception';

    /**
     * The item is an occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCCURRENCE = 'Occurrence';

    /**
     * The item is master for a set of recurring calendar items.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRING_MASTER = 'RecurringMaster';

    /**
     * The item is not associated with a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SINGLE = 'Single';
}
