<?php
/**
 * Definition of the GetServerTimeZonesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetServerTimeZonesType type
 */
class GetServerTimeZonesType extends PhpEws\EWSType
{
    /**
     * Collection of timezone identifiers to get the definition for. Omit to get
     * the definition of all timezones supported by the server.
     *
     * @var NonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
}
