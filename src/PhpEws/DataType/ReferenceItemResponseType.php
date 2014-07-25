<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ReferenceItemResponseType type
 */
class ReferenceItemResponseType extends DataType
{
    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
