<?php
/**
 * Contains EWSType_BaseGroupByType.
 */

/**
 * Base class for item ordering.
 *
 * @package php-ews\Types
 */
class EWSType_BaseGroupByType extends EWSType
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
}
