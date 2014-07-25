<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PostReplyItemBaseType type
 */
class PostReplyItemBaseType extends DataType
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var BodyType
     */
    public $Body;

    /**
     * ReferenceItemId property
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
