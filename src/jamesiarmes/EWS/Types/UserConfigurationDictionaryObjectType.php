<?php
/**
 * Contains UserConfigurationDictionaryObjectType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the value of a dictionary property.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserConfigurationDictionaryObjectType extends EWSType
{
    /**
     * Specifies the dictionary object type.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationDictionaryObjectTypesType
     */
    public $Type;

    /**
     * Specifies the dictionary object value as a string.ß
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Value;
}
