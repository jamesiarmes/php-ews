<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: AttachmentType
 *
 * @method AttachmentIdType getAttachmentId()
 * @method AttachmentType setAttachmentId(AttachmentIdType $attachmentId)
 * @method string getName()
 * @method AttachmentType setName(string $name)
 * @method string getContentType()
 * @method AttachmentType setContentType(string $contentType)
 * @method string getContentId()
 * @method AttachmentType setContentId(string $contentId)
 * @method string getContentLocation()
 * @method AttachmentType setContentLocation(string $contentLocation)
 * @method integer getSize()
 * @method AttachmentType setSize(integer $size)
 * @method \DateTime getLastModifiedTime()
 * @method AttachmentType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method boolean getIsInline()
 * @method AttachmentType setIsInline(boolean $isInline)
 */
class AttachmentType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AttachmentIdType
     */
    protected $attachmentId = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $contentType = null;

    /**
     * @var string
     */
    protected $contentId = null;

    /**
     * @var string
     */
    protected $contentLocation = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var \DateTime
     */
    protected $lastModifiedTime = null;

    protected $_typeMap = array(
        'lastModifiedTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $isInline = null;
}
