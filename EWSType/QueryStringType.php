<?php
/**
 * Contains EWSType_QueryStringType.
 */

/**
 * Represents a mailbox query string based on Advanced Query Syntax (AQS).
 *
 * @package php-ews\Types
 */
class EWSType_QueryStringType extends EWSType
{
    /**
     * Text value of the query string.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @link http://msdn.microsoft.com/en-us/library/ee693615(v=exchg.150).aspx
     */
    public $_;

    /**
     * Indicates that the cache should be reset.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ResetCache;

    /**
     * Indicates that deleted items should be returned.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ReturnDeletedItems;

    /**
     * Indicates that highlighted terms should be returned.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ReturnHighlightTerms;
}
