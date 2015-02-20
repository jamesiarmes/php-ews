<?php
/**
 * Contains RequestAttachmentIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single attachment.
 *
 * @package jamesiarmes\EWS\Types
 */
class RequestAttachmentIdType extends EWSType
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
