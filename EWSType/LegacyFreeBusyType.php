<?php
/**
 * Contains EWSType_LegacyFreeBusyType.
 */

/**
 * Represents the intended status for a calendar item that is associated with a
 * meeting request.
 *
 * @package php-ews\Enumerations
 */
class EWSType_LegacyFreeBusyType extends EWSType
{
    /**
     * The calendar item represents busy time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSY = 'Busy';

    /**
     * The calendar item represents free time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FREE = 'Free';

    /**
     * The calendar item's status is not defined.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_DATA = 'NoData';

    /**
     * The calendar item represents time out of the office.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OUT_OF_OFFICE = 'OOF';

    /**
     * The calendar item represents tentativly busy time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TENTATIVE = 'Tentative';

    /**
     * The calendar item represents time working off site.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WORKING_ELSEWHERE = 'WorkingElsewhere';

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
