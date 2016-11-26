<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetNonIndexableItemStatisticsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetNonIndexableItemStatistics request.
 *
 * @package php-ews\Response
 */
class GetNonIndexableItemStatisticsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of statistics for items that could not be indexed.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfNonIndexableItemStatisticsType
     */
    public $NonIndexableItemStatistics;
}
