<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AttachmentResponseShapeType
 *
 *
 * XSD Type: AttachmentResponseShapeType
 *
 * @method AttachmentResponseShapeType getIncludeMimeContent()
 * @method AttachmentResponseShapeType setIncludeMimeContent($includeMimeContent)
 * @method AttachmentResponseShapeType getBodyType()
 * @method AttachmentResponseShapeType setBodyType($bodyType)
 * @method AttachmentResponseShapeType getFilterHtmlContent()
 * @method AttachmentResponseShapeType setFilterHtmlContent($filterHtmlContent)
 * @method AttachmentResponseShapeType getAdditionalProperties()
 * @method AttachmentResponseShapeType
 * setAdditionalProperties($additionalProperties)
 */
class AttachmentResponseShapeType extends TypeTest
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
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfPathsToElementType
     * $additionalProperties
     */
    protected $additionalProperties = null;


}

