<?php
/**
 * Contains EWSType_ArrayOfStringAttributedValuesType.
 */

/**
 * Represents an array of names and the identifiers of their source attributions
 * for the associated persona.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfStringAttributedValuesType extends EWSType
{
    /**
     * Specifies an instance in an array of attributes associated with a persona
     * element.
     *
     * @since Exchange 2013
     *
     * @var EWSType_StringAttributedValueType
     */
    public $StringAttributedValue;
}
