<?php
/**
 * Contains \jamesiarmes\PEWS\Type\RequestAttachmentIdType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Identifies a single attachment.
 *
 * @package php-ews\Types
 */
class RequestAttachmentIdType extends BaseItemIdType
{
    /**
     * Specifies the attachment identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;
}
