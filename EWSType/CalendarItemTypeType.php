<?php
/**
 * Contains EWSType_CalendarItemTypeType.
 */

/**
 * Defines the type of a calendar item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_CalendarItemTypeType extends EWSType
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
