<?php
/**
 * Definition of the PhysicalAddressKeyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Physical address key type
 */
class EWSType_PhysicalAddressKeyType extends EWSType
{
    /**
     * Business physical address type
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Home physical address type
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Other physical address type
     *
     * @var string
     */
    const OTHER = 'Other';

    /**
     * Value of the desired mapping. Should be one of the constants from the
     * EWSType_PhysicalAddressKeyType class.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
