<?php
/**
 * Definition of the FileAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FileAttachmentType type
 */
class EWSType_FileAttachmentType extends EWSType
{
    /**
     * Identifies the file attachment.
     *
     * @var EWSType_AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Represents the name of the attachment.
     *
     * @var string
     */
    public $Name;

    /**
     * Describes the Multipurpose Internet Mail Extensions (MIME) type of the
     * attachment content.
     *
     * @var string
     */
    public $ContentType;

    /**
     * Represents an identifier for the contents of an attachment. ContentId can
     * be set to any string value. Applications can use ContentId to implement
     * their own identification mechanisms.
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
     * Represents the size in bytes of the file attachment.
     *
     * @var integer
     */
    public $Size;

    /**
     * Represents when the file attachment was last modified.
     *
     * @var EWSType_dateTime
     */
    public $LastModifiedTime;

    /**
     * Represents whether the attachment appears inline within an item.
     *
     * @var boolean
     */
    public $IsInline;

    /**
     * Indicates whether the file attachment is a contact picture.
     *
     * @var boolean
     */
    public $IsContactPhoto;

    /**
     * Contains the Base64-encoded contents of the file attachment.
     *
     * @var string
     *
     * @todo Consider using an object that takes a file stream and does the
     * base64 conversion.
     */
    public $Content;
}
