<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\FileAttachmentType.
 */

namespace jamesiarmes\PEWS\API\Type;

/**
 * Represents a file that is attached to an item in the Exchange store.
 *
 * @package php-ews\Types
 */
class FileAttachmentType extends AttachmentType
{

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
     * Indicates whether the file attachment is a contact picture.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsContactPhoto;
}
