<?php
/**
 * Contains EWSType_DistinguishedGroupByType.
 */

/**
 * Represents standard groupings for FindItem queries.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseGroupByType.
 */
class EWSType_DistinguishedGroupByType extends EWSType
{
    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;

    /**
     * Represents the standard grouping and aggregating mechanisms for a grouped
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_StandardGroupByType
     */
    public $StandardGroupBy;
}
