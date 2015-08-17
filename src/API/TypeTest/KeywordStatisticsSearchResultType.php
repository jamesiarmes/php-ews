<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing KeywordStatisticsSearchResultType
 *
 * Keyword statistics search result.
 * XSD Type: KeywordStatisticsSearchResultType
 *
 * @method KeywordStatisticsSearchResultType getKeyword()
 * @method KeywordStatisticsSearchResultType setKeyword(string $keyword)
 * @method KeywordStatisticsSearchResultType getItemHits()
 * @method KeywordStatisticsSearchResultType setItemHits(integer $itemHits)
 * @method KeywordStatisticsSearchResultType getSize()
 * @method KeywordStatisticsSearchResultType setSize(integer $size)
 */
class KeywordStatisticsSearchResultType extends TypeTest
{

    /**
     * @property string $keyword
     */
    protected $keyword = null;

    /**
     * @property integer $itemHits
     */
    protected $itemHits = null;

    /**
     * @property integer $size
     */
    protected $size = null;


}

