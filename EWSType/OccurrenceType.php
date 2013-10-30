<?php
/**
 * Contains EWSType_OccurrenceType.
 */

/**
 * Represents the occurrence of the day of the week in a month.
 *
 * @package php-ews\Enumerations
 */
class EWSType_OccurrenceType extends EWSType
{
    /**
     * The first occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const FIRST_FROM_BEGINNING = 1;

    /**
     * The first occurrence of the specified day of the week from the end of the
     * month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const FIRST_FROM_END = -1;

    /**
     * The fourth occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const FOURTH_FROM_BEGINNING = 4;

    /**
     * The fourh occurrence of the specified day of the week from the end of the
     * month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const FOURTH_FROM_END = -4;

    /**
     * The second occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const SECOND_FROM_BEGINNING = 2;

    /**
     * The second occurrence of the specified day of the week from the end of
     * the month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const SECOND_FROM_END = -2;

    /**
     * The third occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const THIRD_FROM_BEGINNING = 3;

    /**
     * The third occurrence of the specified day of the week from the end of the
     * month.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    const THIRD_FROM_END = -3;

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
