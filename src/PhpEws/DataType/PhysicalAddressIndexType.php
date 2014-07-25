<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PhysicalAddressIndexType type
 */
class PhysicalAddressIndexType extends DataType
{
    /**
     * Address index for business.
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Address index for home.
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Address index for none.
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Address index for other.
     *
     * @var string
     */
    const OTHER = 'Other';
}
