<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends DataType
{
    /**
     * UserIds property
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;
}
