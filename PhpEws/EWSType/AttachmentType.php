<?php
/**
 * Definition of the AttachmentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AttachmentType type
 */
class AttachmentType extends PhpEws\EWSType
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
