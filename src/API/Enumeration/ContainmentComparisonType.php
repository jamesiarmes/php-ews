<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ContainmentComparisonType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Determines whether a search ignores cases and spaces.
 *
 * @package php-ews\Enumeration
 */
class ContainmentComparisonType extends Enumeration
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
}
