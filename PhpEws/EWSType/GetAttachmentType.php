<?php
/**
 * Definition of the GetAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends EWSType
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
