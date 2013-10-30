<?php
/**
 * Contains EWSType_MonthNamesType.
 */

/**
 * Describes the month when a yearly recurring item occurs.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MonthNamesType extends EWSType
{
    /**
     * Text value for the month of January.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const JANUARY = 'January';

    /**
     * Text value for the month of February.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FEBRUARY = 'February';

    /**
     * Text value for the month of March.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MARCH = 'March';

    /**
     * Text value for the month of April.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const APRIL = 'April';

    /**
     * Text value for the month of May.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAY = 'May';

    /**
     * Text value for the month of June.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const JUNE = 'June';

    /**
     * Text value for the month of July.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const JULY = 'July';

    /**
     * Text value for the month of August.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AUGUST = 'August';

    /**
     * Text value for the month of September.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEPTEMBER = 'September';

    /**
     * Text value for the month of October.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCTOBER = 'October';

    /**
     * Text value for the month of November.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOVEMBER = 'November';

    /**
     * Text value for the month of December.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DECEMBER = 'December';

    /**
     * Indicates the month to be used for the value.
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
