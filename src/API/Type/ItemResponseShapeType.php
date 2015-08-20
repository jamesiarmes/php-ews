<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemResponseShapeType
 *
 *
 * XSD Type: ItemResponseShapeType
 *
 * @method ItemResponseShapeType getBaseShape()
 * @method ItemResponseShapeType setBaseShape(string $baseShape)
 * @method ItemResponseShapeType getIncludeMimeContent()
 * @method ItemResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method ItemResponseShapeType getBodyType()
 * @method ItemResponseShapeType setBodyType(string $bodyType)
 * @method ItemResponseShapeType getFilterHtmlContent()
 * @method ItemResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method ItemResponseShapeType getConvertHtmlCodePageToUTF8()
 * @method ItemResponseShapeType setConvertHtmlCodePageToUTF8(boolean $convertHtmlCodePageToUTF8)
 * @method ItemResponseShapeType getAdditionalProperties()
 * @method ItemResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class ItemResponseShapeType extends Type
{

    /**
     * @property string $baseShape
     */
    protected $baseShape = null;

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
     * @property boolean $convertHtmlCodePageToUTF8
     */
    protected $convertHtmlCodePageToUTF8 = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfPathsToElementType
     * $additionalProperties
     */
    protected $additionalProperties = null;
}
