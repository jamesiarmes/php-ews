<?php
/**
 * Contains EWSType_GetAttachmentType.
 */

/**
 * Defines a request to get an attachment from the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetAttachmentType extends EWSType
{
    /**
     * Contains an array of attachment identifiers.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;

    /**
     * Identifies additional extended item properties to return in a response to
     * a GetAttachment request.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AttachmentResponseShapeType
     */
    public $AttachmentShape;
}
