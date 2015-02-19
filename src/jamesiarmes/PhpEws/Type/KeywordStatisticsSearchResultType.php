<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\KeywordStatisticsSearchResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single keyword search result.
 *
 * @package php-ews\Type
 */
class KeywordStatisticsSearchResultType extends Type
{
    /**
     * Identifies how many times a keyword was found.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $ItemHits;

    /**
     * Specifies a single keyword.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Keyword;

    /**
     * Defines the total size of one or more mailbox items.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $Size;
}
