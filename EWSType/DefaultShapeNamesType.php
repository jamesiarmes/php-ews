<?php
/**
 * Contains EWSType_DefaultShapeNamesType.
 */

/**
 * Defines the set of properties to return in an item or folder response.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DefaultShapeNamesType extends EWSType
{
    /**
     * Returns all the properties used by the Exchange Business Logic layer to
     * construct a folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALL_PROPERTIES = 'AllProperties';

    /**
     * Returns a set of properties that are defined as the default for the item
     * or folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DEFAULT_PROPERTIES = 'Default';

    /**
     * Returns only the item or folder ID.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ID_ONLY = 'IdOnly';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
