<?php
/**
 * Contains PhysicalAddressKeyType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the key for a physical address.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class PhysicalAddressKeyType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
