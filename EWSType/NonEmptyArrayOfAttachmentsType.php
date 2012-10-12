<?php
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 */
class EWSType_NonEmptyArrayOfAttachmentsType extends EWSType
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
