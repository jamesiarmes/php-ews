<?php
/**
 * Definition of the DeleteAttachmentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DeleteAttachmentType type
 */
class DeleteAttachmentType extends PhpEws\EWSType
{
    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
