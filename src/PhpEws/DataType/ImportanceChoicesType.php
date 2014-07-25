<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ImportanceChoicesType type
 */
class ImportanceChoicesType extends DataType
{
    /**
     * Importance level of the item.
     *
     * @var string
     */
    public $_;

    /**
     * High importance level.
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Converts the object to a string.
     *
     * @return string The string representation of the current object.
     */
    public function __toString()
    {
        return $this->_;
    }
}
