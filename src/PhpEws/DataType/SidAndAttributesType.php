<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends DataType
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var unsignedInt
     */
    public $Attributes;
}
