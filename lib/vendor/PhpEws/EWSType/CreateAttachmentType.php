<?php
/**
 * Definition of the CreateAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends EWSType
{
    /**
     * ParentItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var EWSType_NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
