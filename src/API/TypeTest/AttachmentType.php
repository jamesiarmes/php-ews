<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: AttachmentType
 *
 * @method AttachmentType getAttachmentId()
 * @method AttachmentType setAttachmentId($attachmentId)
 * @method AttachmentType getName()
 * @method AttachmentType setName($name)
 * @method AttachmentType getContentType()
 * @method AttachmentType setContentType($contentType)
 * @method AttachmentType getContentId()
 * @method AttachmentType setContentId($contentId)
 * @method AttachmentType getContentLocation()
 * @method AttachmentType setContentLocation($contentLocation)
 * @method AttachmentType getSize()
 * @method AttachmentType setSize($size)
 * @method AttachmentType getLastModifiedTime()
 * @method AttachmentType setLastModifiedTime($lastModifiedTime)
 * @method AttachmentType getIsInline()
 * @method AttachmentType setIsInline($isInline)
 */
class AttachmentType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AttachmentIdType $attachmentId
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

