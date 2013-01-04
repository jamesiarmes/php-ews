<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 */
class NonEmptyArrayOfGroupIdentifiersType extends EWSType
{
    /**
     * GroupIdentifier property
     *
     * @var EWSType_SidAndAttributesType
     */
    public $GroupIdentifier;
}
