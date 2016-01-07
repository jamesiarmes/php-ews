<?php
/**
 * Contains EWSType_FlagStatusType.
 */

/**
 * Represents the flagged status of an item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_FlagStatusType extends EWSType
{
    /**
     * Indicates the complete flag status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const COMPLETE = 'Complete';

    /**
     * Indicates the flagged status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const FLAGGED = 'Flagged';

    /**
     * Indicates the not-flagged status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const NOT_FLAGGED = 'NotFlagged';

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
