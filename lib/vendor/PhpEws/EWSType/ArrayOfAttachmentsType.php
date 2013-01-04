<?php
/**
 * Definition of the ArrayOfAttachmentsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ArrayOfAttachmentsType type
 */
class ArrayOfAttachmentsType extends EWSType
{
    /**
     * ItemAttachment property
     *
     * @var EWSType_ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var EWSType_FileAttachmentType
     */
    public $FileAttachment;
}
