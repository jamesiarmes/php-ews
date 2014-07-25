<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AttachmentType type
 */
class AttachmentType extends DataType
{
    /**
     * AttachmentId property
     *
     * @var AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * ContentType property
     *
     * @var string
     */
    public $ContentType;

    /**
     * ContentId property
     *
     * @var string
     */
    public $ContentId;

    /**
     * ContentLocation property
     *
     * @var string
     */
    public $ContentLocation;
}
