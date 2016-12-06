<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfRestrictedGroupIdentifiersType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of restricted groups from a user's token.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends ArrayType
{
    /**
     * Represents the group security identifier (SID) and attributes for a
     * restricted group.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SidAndAttributesType[]
     */
    public $RestrictedGroupIdentifier = array();
}
