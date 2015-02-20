<?php
/**
 * Contains UserConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a single user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserConfigurationType extends EWSType
{
    /**
     * Contains binary data property content for a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $BinaryData;

    /**
     * Defines a set of dictionary property entries for a user configuration
     * object.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationDictionaryType
     */
    public $Dictionary;

    /**
     * Defines the user configuration object item identifier.
     *
     * @since Exchange 2010
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Represents the name of a user configuration object.
     *
     * This element must be used when you create a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Contains XML data property content for a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $XmlData;
}
