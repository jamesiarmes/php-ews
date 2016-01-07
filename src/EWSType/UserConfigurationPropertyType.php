<?php
/**
 * Contains EWSType_UserConfigurationPropertyType.
 */

/**
 * Class description...
 *
 * @package php-ews\Enumerations
 */
class EWSType_UserConfigurationPropertyType extends EWSType
{
    /**
     * Specifies the identifier, dictionary, XML data, and binary data property
     * types.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * Specifies binary data property types.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const BINARY_DATA = 'BinaryData';

    /**
     * Specifies dictionary property types.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DICTIONARY = 'Dictionary';

    /**
     * Specifies the identifier property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ID = 'Id';

    /**
     * Specifies XML data property types.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const XML_DATA = 'XmlData';

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
