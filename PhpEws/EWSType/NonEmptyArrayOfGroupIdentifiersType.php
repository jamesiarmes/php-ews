<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 */
class NonEmptyArrayOfGroupIdentifiersType extends PhpEws\EWSType
{
    /**
     * GroupIdentifier property
     *
     * @var SidAndAttributesType
     */
    public $GroupIdentifier;
}
