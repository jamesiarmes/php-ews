<?php
/**
 * Contains ArrayOfDLExpansionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of mailboxes that are contained in a distribution list.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfDLExpansionType extends EWSType
{
    /**
     * Represents the next denominator to use for the next request when you are
     * using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * Indicates whether the current results contain the last item in the query
     * so that additional paging is not needed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Represents the next index that should be used for the next request when
     * you are using an indexed page view.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $IndexedPagingOffset;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Represents the new numerator value to use for the next request when you
     * are using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * Represents the total number of items in the view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
