<?php
/**
 * Contains EWSType_NonEmptyArrayOfTimeZoneIdType.
 */

/**
 * Represents an array of time zone definition identifiers.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfTimeZoneIdType extends EWSType
{
    /**
     * The element that identifies a single time zone definition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
