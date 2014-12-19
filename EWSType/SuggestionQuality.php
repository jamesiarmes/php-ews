<?php
/**
 * Contains EWSType_SuggestionQuality.
 */

/**
 * Represents the quality of the day for containing quality suggested meeting
 * times.
 *
 * @package php-ews\Enumerations
 */
class EWSType_SuggestionQuality extends EWSType
{
    /**
     * Indicates that the suggested meeting time is excellent.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXCELLENT = 'Excellent';

    /**
     * Indicates that the suggested meeting time is fair.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FAIR = 'Fair';

    /**
     * Indicates that the suggested meeting time is good.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const GOOD = 'Good';

    /**
     * Indicates that the suggested meeting time is poor.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const POOR = 'Poor';

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
