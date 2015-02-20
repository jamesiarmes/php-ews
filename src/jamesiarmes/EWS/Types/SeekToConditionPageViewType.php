<?php
/**
 * Contains SeekToConditionPageViewType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the condition that is used to identify the end of a search, the
 * starting index of a search, the maximum entries to return, and the search
 * directions for a FindItem or FindConversation search.
 *
 * @package jamesiarmes\EWS\Types
 */
class SeekToConditionPageViewType extends EWSType
{
    /**
     * The text value of the BasePoint attribute is the base point from where
     * the search will start.
     *
     * A text value of Beginning indicates that the search will start at the
     * beginning of the result set. A text value of End indicates that the
     * search will start at the end of the result set.
     *
     * @since Exchange 2013
     *
     * @var BasePointType
     */
    public $BasePoint;

    /**
     * The maximum number of items that can be returned in a result set.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $MaxEntriesReturned;

    /**
     * The condition that is used to identify the end of a search for a FindItem
     * or a FindConversation operation.
     *
     * @since Exchange 2013
     *
     * @var RestrictionType
     */
    public $Condition;
}
