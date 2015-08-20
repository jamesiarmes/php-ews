<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FileAttachmentType
 *
 *
 * XSD Type: FileAttachmentType
 *
 * @method FileAttachmentType getIsContactPhoto()
 * @method FileAttachmentType setIsContactPhoto(boolean $isContactPhoto)
 * @method FileAttachmentType getContent()
 * @method FileAttachmentType setContent(string $content)
 */
class FileAttachmentType extends AttachmentType
{

    /**
     * @property boolean $isContactPhoto
     */
    protected $isContactPhoto = null;

    /**
     * @property string $content
     */
    protected $content = null;
}
