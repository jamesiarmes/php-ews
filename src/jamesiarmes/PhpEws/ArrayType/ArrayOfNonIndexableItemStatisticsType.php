<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfNonIndexableItemStatisticsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of statistics for items that could not be indexed.
 *
 * @package php-ews\Array
 */
class ArrayOfNonIndexableItemStatisticsType extends ArrayType
{
    /**
     * Contains a single statistic for an item that could not be indexed.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\NonIndexableItemStatisticType[]
     */
    public $NonIndexableItemStatistic = array();
}
