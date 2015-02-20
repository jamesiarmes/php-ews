<?php
/**
 * Contains DistinguishedGroupByType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents standard groupings for FindItem queries.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseGroupByType.
 */
class DistinguishedGroupByType extends EWSType
{
    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var SortDirectionType
     */
    public $Order;

    /**
     * Represents the standard grouping and aggregating mechanisms for a grouped
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var StandardGroupByType
     */
    public $StandardGroupBy;
}
