<?php
/**
 * Contains KeywordStatisticsSearchResultType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single keyword search result.
 *
 * @package jamesiarmes\EWS\Types
 */
class KeywordStatisticsSearchResultType extends EWSType
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
