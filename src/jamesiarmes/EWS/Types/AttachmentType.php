<?php
/**
 * Contains AttachmentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an Exchange attachment.
 *
 * @package jamesiarmes\EWS\Types
 */
abstract class AttachmentType extends EWSType
{
    /**
     * Identifies the attachment.
     *
     * @var AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Represents an identifier to the contents of the attachment.
     *
     * ContentId can be set to any string value. Applications can use ContentId
     * to implement their own identification mechanisms.
     *
     * @var string
     */
    public $ContentId;

    /**
     * Contains the Uniform Resource Identifier (URI) that corresponds to the
     * location of the content of the attachment.
     *
     * @var string
     */
    public $ContentLocation;

    /**
     * Describes the Multipurpose Internet Mail Extensions (MIME) type of the
     * attachment content.
     *
     * @var string
     */
    public $ContentType;

    /**
     * Represents the name of the attachment.
     *
     * @var string
     */
    public $Name;
}
