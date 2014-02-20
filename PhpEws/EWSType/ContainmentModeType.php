<?php
/**
 * Identifies the boundaries of a search.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ContainmentModeType type.
 */
class EWSType_ContainmentModeType extends EWSType
{
    /**
     * The comparison is between an exact phrase in the string and the constant.
     *
     * @var string
     */
    const EXACT_PHRASE = 'ExactPhrase';

    /**
     * The comparison is between the full string and the constant. The property
     * value and the supplied constant are precisely the same.
     *
     * @var string
     */
    const FULL_STRING = 'FullString';

    /**
     * The comparison is between a prefix on individual words in the string and
     * the constant.
     *
     * @var string
     */
    const PREFIX_ON_WORDS = 'PrefixOnWords';

    /**
     * The comparison is between the string prefix and the constant.
     *
     * @var string
     */
    const PREFIXED = 'Prefixed';

    /**
     * The comparison is between a substring of the string and the constant.
     *
     * @var string
     */
    const SUBSTRING = 'Substring';

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
