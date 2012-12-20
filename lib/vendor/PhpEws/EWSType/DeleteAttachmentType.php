<?php
/**
 * Definition of the DeleteAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the DeleteAttachmentType type
 */
class DeleteAttachmentType extends EWSType
{
    /**
     * AttachmentIds property
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
