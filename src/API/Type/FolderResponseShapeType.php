<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderResponseShapeType
 *
 *
 * XSD Type: FolderResponseShapeType
 *
 * @method FolderResponseShapeType getBaseShape()
 * @method FolderResponseShapeType setBaseShape(string $baseShape)
 * @method FolderResponseShapeType getAdditionalProperties()
 * @method FolderResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class FolderResponseShapeType extends Type
{

    /**
     * @property string $baseShape
     */
    protected $baseShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfPathsToElementType
     * $additionalProperties
     */
    protected $additionalProperties = null;
}
