<?php
/**
 * Contains EWSType_FractionalPageViewType.
 */

/**
 * Describes where the paged view starts and the maximum number of folders
 * returned in a FindFolder request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BasePagingType.
 */
class EWSType_FractionalPageViewType extends EWSType
{
    /**
     * Represents the denominator of the fractional offset from the start of the
     * total number of folders in the result set.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Denominator;

    /**
     * Identifies the maximum number of results to return in the FindFolder
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
     * Represents the numerator of the fractional offset from the start of the
     * result set.
     *
     * The numerator must be equal to or less than the denominator.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Numerator;
}
