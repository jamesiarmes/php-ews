<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Physical address key type
 */
class PhysicalAddressKeyType extends DataType
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
     * PhysicalAddressKeyType class.
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
