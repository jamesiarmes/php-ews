<?php
/**
 * Definition of the PathToExtendedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PathToExtendedFieldType type
 */
class EWSType_PathToExtendedFieldType extends EWSType
{
    /**
     * DistinguishedPropertySetId property
     *
     * @var EWSType_DistinguishedPropertySetType
     */
    public $DistinguishedPropertySetId;

    /**
     * PropertySetId property
     *
     * @var EWSType_GuidType
     */
    public $PropertySetId;

    /**
     * PropertyTag property
     *
     * @var EWSType_PropertyTagType
     */
    public $PropertyTag;

    /**
     * PropertyName property
     *
     * @var string
     */
    public $PropertyName;

    /**
     * PropertyId property
     *
     * @var integer
     */
    public $PropertyId;

    /**
     * PropertyType property
     *
     * @var EWSType_MapiPropertyTypeType
     */
    public $PropertyType;
}
