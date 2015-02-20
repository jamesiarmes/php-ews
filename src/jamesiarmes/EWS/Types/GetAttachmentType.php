<?php
/**
 * Contains GetAttachmentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get an attachment from the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetAttachmentType extends EWSType
{
    /**
     * Contains an array of attachment identifiers.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
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
     * @var AttachmentResponseShapeType
     */
    public $AttachmentShape;
}
