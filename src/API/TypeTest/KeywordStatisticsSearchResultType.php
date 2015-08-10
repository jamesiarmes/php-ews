<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing KeywordStatisticsSearchResultType
 *
 * Keyword statistics search result.
 * XSD Type: KeywordStatisticsSearchResultType
 *
 * @method KeywordStatisticsSearchResultType getKeyword()
 * @method KeywordStatisticsSearchResultType setKeyword($keyword)
 * @method KeywordStatisticsSearchResultType getItemHits()
 * @method KeywordStatisticsSearchResultType setItemHits($itemHits)
 * @method KeywordStatisticsSearchResultType getSize()
 * @method KeywordStatisticsSearchResultType setSize($size)
 */
class KeywordStatisticsSearchResultType extends Type
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

