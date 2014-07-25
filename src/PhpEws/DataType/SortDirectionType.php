<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

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
