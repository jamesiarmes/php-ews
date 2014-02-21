<?php
/**
 * Definition of the CreateAttachmentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends PhpEws\EWSType
{
    /**
     * ParentItemId property
     *
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
