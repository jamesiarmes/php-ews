<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderResponseShapeType
 *
 *
 * XSD Type: FolderResponseShapeType
 *
 * @method string getBaseShape()
 * @method FolderResponseShapeType setBaseShape(string $baseShape)
 * @method NonEmptyArrayOfPathsToElementType getAdditionalProperties()
 * @method FolderResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class FolderResponseShapeType extends Type
{

    /**
     * @var string
     */
    protected $baseShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfPathsToElementType
     */
    protected $additionalProperties = null;
}
