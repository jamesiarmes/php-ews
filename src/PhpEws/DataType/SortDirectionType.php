<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SortDirectionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Sort order specification
 */
class SortDirectionType extends DataType
{
    /**
     * Items are sorted in ascending order
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order
     *
     * @var string
     */
    const DESCENDING = 'Descending';
}
