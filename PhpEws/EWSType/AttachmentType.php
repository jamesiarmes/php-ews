<?php
/**
 * Definition of the AttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AttachmentType type
 */
class AttachmentType extends EWSType
{
    /**
     * AttachmentId property
     *
     * @var EWSType_AttachmentIdType
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
