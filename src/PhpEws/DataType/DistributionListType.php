<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DistributionListType type
 */
class DistributionListType extends DataType
{
    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * FileAs property
     *
     * @var string
     */
    public $FileAs;

    /**
     * ContactSource property
     *
     * @var ContactSourceType
     */
    public $ContactSource;
}
