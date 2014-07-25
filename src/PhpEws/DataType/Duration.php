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
     * @var EWSType_dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var EWSType_dateTime
     */
    public $EndTime;
}
