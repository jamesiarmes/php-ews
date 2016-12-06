<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ContainmentModeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Identifies the boundaries of a search.
 *
 * @package php-ews\Enumeration
 */
class ContainmentModeType extends Enumeration
{
    /**
     * The comparison is between an exact phrase in the string and the constant.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXACT_PHRASE = 'ExactPhrase';

    /**
     * The comparison is between the full string and the constant.
     *
     * The property value and the supplied constant are precisely the same.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FULL_STRING = 'FullString';

    /**
     * The comparison is between a prefix on individual words in the string and
     * the constant.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PREFIX_ON_WORDS = 'PrefixOnWords';

    /**
     * The comparison is between the string prefix and the constant.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PREFIXED = 'Prefixed';

    /**
     * The comparison is between a substring of the string and the constant.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SUBSTRING = 'Substring';
}
