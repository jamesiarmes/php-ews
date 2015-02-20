<?php
/**
 * Contains CreateAttachmentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to create an attachment to an item in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class CreateAttachmentType extends EWSType
{
    /**
     * Identifies the parent Exchange store item that contains the created
     * attachment.
     *
     * The ParentItemId element must provide the ID of a real Exchange store
     * item. Real store items can be retrieved by using the GetItem operation;
     * attachments are retrieved by using the GetAttachment operation. An error
     * occurs if the ParentItemId is passed the ID of a file attachment. If the
     * ParentItemId represents the ID of an existing item attachment, the
     * CreateAttachment operation adds the new attachment to the existing
     * attachment.
     *
     * This element is required.
     *
     * The following item attachments can be created:
     * - Item
     * - Message
     * - CalendarItem
     * - Contact
     * - Task
     * - MeetingMessage
     * - MeetingRequest
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Contains the items or files to attach to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfAttachmentsType
     */
    public $Attachments;
}
