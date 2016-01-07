<?php
/**
 * Contains EWSType_ConnectionFailureCauseType.
 */

/**
 * Specifies the reason for a disconnection from a telephone call.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ConnectionFailureCauseType extends EWSType
{
    /**
     * The called party did not answer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_ANSWER = 'NoAnswer';

    /**
     * Call state is not disconnected or the disconnect reason is not known.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Catch-all for other disconnect reasons.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OTHER = 'Other';

    /**
     * The called party number was not available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNAVAILABLE = 'Unavailable';

    /**
     * The called party line was busy.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const USER_BUSY = 'UserBusy';

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
