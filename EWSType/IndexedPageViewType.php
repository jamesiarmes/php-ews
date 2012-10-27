<?php
/**
 * Contains EWSType_IndexedPageViewType.
 */

/**
 * Describes how paged conversation or item information is returned for a
 * FindItem operation or FindConversation operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BasePagingType.
 */
class EWSType_IndexedPageViewType extends EWSType
{
    /**
     * Describes whether the page of items or conversations will start from the
     * beginning or the end of the set of items or conversations that are found
     * by using the search criteria.
     *
     * Seeking from the end always searches backward.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BasePointType
     */
    public $BasePoint;

    /**
     * Describes the maximum number of items or conversations to return in the
     * response.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaxEntriesReturned;

    /**
     * Describes the offset from the BasePoint.
     *
     * If BasePoint is equal to Beginning, the offset is positive. If BasePoint
     * is equal to End, the offset is handled as if it were negative. This
     * identifies which item or conversation will be the first to be delivered
     * in the response.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Offset;
}
