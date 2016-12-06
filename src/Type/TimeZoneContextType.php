<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TimeZoneContextType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the time zone definition that is to be used as the default when
 * assigning the time zone for the DateTime properties of objects that are
 * created, updated, and retrieved by using Exchange Web Services (EWS).
 *
 * @package php-ews\Type
 */
class TimeZoneContextType extends Type
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
