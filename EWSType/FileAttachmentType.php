<?php
/**
 * Contains EWSType_FileAttachmentType.
 */

/**
 * Represents a file that is attached to an item in the Exchange store.
 *
 * @package php-ews\Types
 */
class EWSType_FileAttachmentType extends EWSType
{
    /**
     * Identifies the file attachment.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Contains the Base64-encoded contents of the file attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Consider using an object that takes a file stream and does the
     * base64 conversion.
     */
    public $Content;

    /**
     * Represents an identifier for the contents of an attachment. ContentId can
     * be set to any string value. Applications can use ContentId to implement
     * their own identification mechanisms.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentId;

    /**
     * Contains the Uniform Resource Identifier (URI) that corresponds to the
     * location of the content of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentLocation;

    /**
     * Describes the Multipurpose Internet Mail Extensions (MIME) type of the
     * attachment content.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentType;

    /**
     * Indicates whether the file attachment is a contact picture.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsContactPhoto;

    /**
     * Represents whether the attachment appears inline within an item.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsInline;

    /**
     * Represents when the file attachment was last modified.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Represents the name of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Name;

    /**
     * Represents the size in bytes of the file attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Size;
}
