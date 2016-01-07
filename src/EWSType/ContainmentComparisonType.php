<?php
/**
 * Contains EWSType_ContainmentComparisonType.
 */

/**
 * Determines whether a search ignores cases and spaces.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ContainmentComparisonType extends EWSType
{
    /**
     * The comparison must be exact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXACT = 'Exact';

    /**
     * The comparison ignores casing.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IGNORE_CASE = 'IgnoreCase';

    /**
     * The comparison ignores non-spacing characters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IGNORE_CASE_AND_NON_SPACING_CHARS = 'IgnoreCaseAndNonSpacingCharacters';

    /**
     * The comparison ignores casing and non-spacing characters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IGNORE_NON_SPACING_CHARS = 'IgnoreNonSpacingCharacters';

    /**
     * To be removed.
     *
     * @since Exchange 2007
     * @deprecated Exchange 2007
     *
     * @var string
     */
    const LOOSE = 'Loose';

    /**
     * To be removed.
     *
     * @since Exchange 2007
     * @deprecated Exchange 2007
     *
     * @var string
     */
    const LOOSE_AND_IGNORE_CASE = 'LooseAndIgnoreCase';

    /**
     * To be removed.
     *
     * @since Exchange 2007
     * @deprecated Exchange 2007
     *
     * @var string
     */
    const LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACING_CARS = 'LooseAndIgnoreCaseAndIgnoreNonSpace';

    /**
     * To be removed.
     *
     * @since Exchange 2007
     * @deprecated Exchange 2007
     *
     * @var string
     */
    const LOOSE_AND_IGNORE_NON_SPACING_CHARS = 'LooseAndIgnoreNonSpace';

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
