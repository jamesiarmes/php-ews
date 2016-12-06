<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfKeywordStatisticsSearchResultsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of one or more KeywordStat elements.
 *
 * @package php-ews\Array
 */
class ArrayOfKeywordStatisticsSearchResultsType extends ArrayType
{
    /**
     * Specifies keyword statistic information.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\KeywordStatisticsSearchResultType[]
     */
    public $KeywordStat = array();
}
