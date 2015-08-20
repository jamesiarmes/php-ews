<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PathToExtendedFieldType
 *
 * Represents an extended property. Note that there are only a couple of valid attribute
 *  combinations. Note that all occurances require the PropertyType attribute.
 *
 *  1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName || Property Id)
 *  2. PropertyTag
 * XSD Type: PathToExtendedFieldType
 *
 * @method PathToExtendedFieldType getDistinguishedPropertySetId()
 * @method PathToExtendedFieldType setDistinguishedPropertySetId(string $distinguishedPropertySetId)
 * @method PathToExtendedFieldType getPropertySetId()
 * @method PathToExtendedFieldType setPropertySetId(string $propertySetId)
 * @method PathToExtendedFieldType getPropertyTag()
 * @method PathToExtendedFieldType setPropertyTag(integer $propertyTag)
 * @method PathToExtendedFieldType getPropertyName()
 * @method PathToExtendedFieldType setPropertyName(string $propertyName)
 * @method PathToExtendedFieldType getPropertyId()
 * @method PathToExtendedFieldType setPropertyId(integer $propertyId)
 * @method PathToExtendedFieldType getPropertyType()
 * @method PathToExtendedFieldType setPropertyType(string $propertyType)
 */
class PathToExtendedFieldType extends BasePathToElementType
{

    /**
     * @property string $distinguishedPropertySetId
     */
    protected $distinguishedPropertySetId = null;

    /**
     * @property string $propertySetId
     */
    protected $propertySetId = null;

    /**
     * @property integer $propertyTag
     */
    protected $propertyTag = null;

    /**
     * @property string $propertyName
     */
    protected $propertyName = null;

    /**
     * @property integer $propertyId
     */
    protected $propertyId = null;

    /**
     * @property string $propertyType
     */
    protected $propertyType = null;
}
