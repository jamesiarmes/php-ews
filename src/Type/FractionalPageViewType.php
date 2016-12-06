<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FractionalPageViewType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Describes where the paged view starts and the maximum number of folders
 * returned in a FindFolder request.
 *
 * @package php-ews\Type
 */
class FractionalPageViewType extends BasePagingType
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
