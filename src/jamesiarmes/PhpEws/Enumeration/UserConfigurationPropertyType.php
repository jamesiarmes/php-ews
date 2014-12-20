<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\UserConfigurationPropertyType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the property types to get in a GetUserConfiguration operation.
 *
 * @package php-ews\Enumeration
 */
class UserConfigurationPropertyType extends Enumeration
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
}
