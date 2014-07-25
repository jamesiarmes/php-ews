<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GetAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends DataType
{
    /**
     * AttachmentShape property
     *
     * @var EWSType_AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
