<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\PhysicalAddressIndexType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the display types for physical addresses.
 *
 * @package php-ews\Enumeration
 */
class PhysicalAddressIndexType extends Enumeration
{
    /**
     * Address index for business.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Address index for home.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Address index for none.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Address index for other.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OTHER = 'Other';
}
