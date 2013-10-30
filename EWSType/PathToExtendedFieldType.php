<?php
/**
 * Contains EWSType_PathToExtendedFieldType.
 */

/**
 * Identifies an extended MAPI property.
 *
 * @package php-ews\Types
 */
class EWSType_PathToExtendedFieldType extends EWSType
{
    /**
     * Defines the well-known property set IDs for extended MAPI properties.
     *
     * If this attribute is used, the PropertySetId and PropertyTag attributes
     * cannot be used. This attribute must be used with either the PropertyId or
     * PropertyName attribute, and the PropertyType attribute.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistinguishedPropertySetIdType
     */
    public $DistinguishedPropertySetId;

    /**
     * Identifies an extended property by its name.
     *
     * This property must be coupled with either DistinguishedPropertySetId or
     * PropertySetId. If this attribute is used, the PropertyId and PropertyTag
     * attributes cannot be used.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PropertyName;

    /**
     * Identifies an extended property by its dispatch ID.
     *
     * The dispatch ID can be identified in either decimal or hexadecimal
     * formats. This property must be coupled with either
     * DistinguishedPropertySetId or PropertySetId. If this attribute is used,
     * the PropertyName and PropertyTag attributes cannot be used.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PropertyId;

    /**
     * Identifies a MAPI extended property set or namespace by its identifying
     * GUID.
     *
     * If this attribute is used, the DistinguishedPropertySetId and PropertyTag
     * attribute cannot be used. This attribute must be used with either the
     * PropertyId or PropertyName attribute, and the PropertyType attribute.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PropertySetId;

    /**
     * Identifies the property tag without the type part of the tag.
     *
     * The PropertyTag can be represented as either a hexadecimal or a short
     * integer. The range between 0x8000 and 0xFFFE represents the custom range
     * of properties. When a mailbox database encounters a custom property for
     * the first time, it assigns that custom property a property tag within the
     * custom property range of 0x8000-0xFFFE. A given custom property tag will
     * most likely differ across databases. Therefore, a custom property request
     * by property tag can return different properties on different databases.
     *
     * The use of the PropertyTag attribute is prohibited for custom properties.
     * Instead, use the PropertySetId attribute and the PropertyName or
     * PropertyId attribute.
     *
     * Important: Access any custom property between 0x8000 and 0xFFFE by using
     * the GUID + name/ID.
     *
     * If the PropertyTag attribute is used, the DistinguishedPropertySetId,
     * PropertySetId, PropertyName, and PropertyId attributes cannot be used.
     *
     * Note: You cannot use a property tag attribute for properties within the
     * custom range 0x8000-0xFFFE. You must use a named property in this case.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PropertyTag;

    /**
     * Represents the property type of a property tag.
     *
     * This corresponds to the least significant word in a property tag. The
     * PropertyType Attribute table later in this topic contains the possible
     * values for this attribute.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MapiPropertyTypeType
     */
    public $PropertyType;
}
