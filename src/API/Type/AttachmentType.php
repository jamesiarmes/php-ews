<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: AttachmentType
 *
 * @method AttachmentType getAttachmentId()
 * @method AttachmentType setAttachmentId(AttachmentIdType $attachmentId)
 * @method AttachmentType getName()
 * @method AttachmentType setName(string $name)
 * @method AttachmentType getContentType()
 * @method AttachmentType setContentType(string $contentType)
 * @method AttachmentType getContentId()
 * @method AttachmentType setContentId(string $contentId)
 * @method AttachmentType getContentLocation()
 * @method AttachmentType setContentLocation(string $contentLocation)
 * @method AttachmentType getSize()
 * @method AttachmentType setSize(integer $size)
 * @method AttachmentType getLastModifiedTime()
 * @method AttachmentType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method AttachmentType getIsInline()
 * @method AttachmentType setIsInline(boolean $isInline)
 */
class AttachmentType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AttachmentIdType $attachmentId
     */
    protected $attachmentId = null;

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property string $contentType
     */
    protected $contentType = null;

    /**
     * @property string $contentId
     */
    protected $contentId = null;

    /**
     * @property string $contentLocation
     */
    protected $contentLocation = null;

    /**
     * @property integer $size
     */
    protected $size = null;

    /**
     * @property \DateTime $lastModifiedTime
     */
    protected $lastModifiedTime = null;

    protected $_typeMap = array(
        'lastModifiedTime' => 'dateTime',
    );

    /**
     * @property boolean $isInline
     */
    protected $isInline = null;


}

