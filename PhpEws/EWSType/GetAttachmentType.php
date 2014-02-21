<?php
/**
 * Definition of the GetAttachmentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends PhpEws\EWSType
{
    /**
     * AttachmentShape property
     *
     * @var AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
