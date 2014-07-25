<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the Duration type
 */
class Duration extends DataType
{
    /**
     * StartTime property
     *
     * @var \DateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var \DateTime
     */
    public $EndTime;
}
