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
 * @method string getDistinguishedPropertySetId()
 * @method PathToExtendedFieldType setDistinguishedPropertySetId(string $distinguishedPropertySetId)
 * @method string getPropertySetId()
 * @method PathToExtendedFieldType setPropertySetId(string $propertySetId)
 * @method integer getPropertyTag()
 * @method PathToExtendedFieldType setPropertyTag(integer $propertyTag)
 * @method string getPropertyName()
 * @method PathToExtendedFieldType setPropertyName(string $propertyName)
 * @method integer getPropertyId()
 * @method PathToExtendedFieldType setPropertyId(integer $propertyId)
 * @method string getPropertyType()
 * @method PathToExtendedFieldType setPropertyType(string $propertyType)
 */
class PathToExtendedFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $distinguishedPropertySetId = null;

    /**
     * @var string
     */
    protected $propertySetId = null;

    /**
     * @var integer
     */
    protected $propertyTag = null;

    /**
     * @var string
     */
    protected $propertyName = null;

    /**
     * @var integer
     */
    protected $propertyId = null;

    /**
     * @var string
     */
    protected $propertyType = null;
}
