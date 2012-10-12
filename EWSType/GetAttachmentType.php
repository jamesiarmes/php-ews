<?php
/**
 * Definition of the GetAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetAttachmentType type
 */
class EWSType_GetAttachmentType extends EWSType
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
