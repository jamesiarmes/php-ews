<?php
/**
 * Contains CalendarItemTypeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the type of a calendar item.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class CalendarItemTypeType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
