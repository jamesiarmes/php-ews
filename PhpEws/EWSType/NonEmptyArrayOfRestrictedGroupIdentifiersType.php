<?php
/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends PhpEws\EWSType
{
    /**
     * RestrictedGroupIdentifier property
     *
     * @var SidAndAttributesType
     */
    public $RestrictedGroupIdentifier;
}
