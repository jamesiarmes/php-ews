<?php
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 */
class NonEmptyArrayOfAttachmentsType extends PhpEws\EWSType
{
    /**
     * ItemAttachment property
     *
     * @var ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var FileAttachmentType
     */
    public $FileAttachment;
}
