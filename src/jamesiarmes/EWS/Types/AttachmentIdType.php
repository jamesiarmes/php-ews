<?php
/**
 * Contains AttachmentIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies an item or file attachment.
 *
 * @package jamesiarmes\EWS\Types
 */
class AttachmentIdType extends EWSType
{
    /**
     * Identifies the unique identifier of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;

    /**
     * Identifies the unique identifier of the root store item to which the
     * attachment is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Identifies the change key of the root store item to which the attachment
     * is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemId;
}
