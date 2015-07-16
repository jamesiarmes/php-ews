<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\PhysicalAddressKeyType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Defines the key for a physical address.
 *
 * @package php-ews\Enumeration
 */
class PhysicalAddressKeyType extends Enumeration
{
    /**
     * Indicates that the address is a business.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Indicates that the address is a home.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Indicates that the address is another type of location.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OTHER = 'Other';
}
