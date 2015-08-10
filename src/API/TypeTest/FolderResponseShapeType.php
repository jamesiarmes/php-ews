<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderResponseShapeType
 *
 *
 * XSD Type: FolderResponseShapeType
 *
 * @method FolderResponseShapeType getBaseShape()
 * @method FolderResponseShapeType setBaseShape($baseShape)
 * @method FolderResponseShapeType getAdditionalProperties()
 * @method FolderResponseShapeType setAdditionalProperties($additionalProperties)
 */
class FolderResponseShapeType extends Type
{

    /**
     * @property string $baseShape
     */
    protected $baseShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfPathsToElementType
     * $additionalProperties
     */
    protected $additionalProperties = null;


}

