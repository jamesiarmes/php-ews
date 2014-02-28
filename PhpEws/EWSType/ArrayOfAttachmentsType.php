<?php
/**
 * Definition of the ArrayOfAttachmentsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfAttachmentsType type
 */
class ArrayOfAttachmentsType extends PhpEws\EWSType
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
