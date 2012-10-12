<?php
/**
 * Represents the occurrence of the day of the week in a month.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the OccurrenceType type.
 */
class EWSType_OccurrenceType extends EWSType
{
    /**
     * The first occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @var integer
     */
    const FIRST_FROM_BEGINNING = 1;

    /**
     * The second occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @var integer
     */
    const SECOND_FROM_BEGINNING = 2;

    /**
     * The third occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @var integer
     */
    const THIRD_FROM_BEGINNING = 3;

    /**
     * The fourth occurrence of the specified day of the week from the beginning
     * of the month.
     *
     * @var integer
     */
    const FOURTH_FROM_BEGINNING = 4;

    /**
     * The first occurrence of the specified day of the week from the end of the
     * month.
     *
     * @var integer
     */
    const FIRST_FROM_END = -1;

    /**
     * The second occurrence of the specified day of the week from the end of
     * the month.
     *
     * @var integer
     */
    const SECOND_FROM_END = -2;

    /**
     * The third occurrence of the specified day of the week from the end of the
     * month.
     *
     * @var integer
     */
    const THIRD_FROM_END = -3;

    /**
     * The fourh occurrence of the specified day of the week from the end of the
     * month.
     *
     * @var integer
     */
    const FOURTH_FROM_END = -4;

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
        return (string) $this->_;
    }
}
