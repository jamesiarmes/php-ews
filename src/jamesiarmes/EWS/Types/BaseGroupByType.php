<?php
/**
 * Contains BaseGroupByType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for item ordering.
 *
 * @package jamesiarmes\EWS\Types
 */
class BaseGroupByType extends EWSType
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
}
