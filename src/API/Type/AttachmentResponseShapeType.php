<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing AttachmentResponseShapeType
 *
 *
 * XSD Type: AttachmentResponseShapeType
 *
 * @method AttachmentResponseShapeType getIncludeMimeContent()
 * @method AttachmentResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method AttachmentResponseShapeType getBodyType()
 * @method AttachmentResponseShapeType setBodyType(string $bodyType)
 * @method AttachmentResponseShapeType getFilterHtmlContent()
 * @method AttachmentResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method AttachmentResponseShapeType getAdditionalProperties()
 * @method AttachmentResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class AttachmentResponseShapeType extends Type
{

    /**
     * @property boolean $includeMimeContent
     */
    protected $includeMimeContent = null;

    /**
     * @property string $bodyType
     */
    protected $bodyType = null;

    /**
     * @property boolean $filterHtmlContent
     */
    protected $filterHtmlContent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfPathsToElementType
     * $additionalProperties
     */
    protected $additionalProperties = null;


}

