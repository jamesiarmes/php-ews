<?php
/**
 * Contains EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType.
 */

/**
 * Represents a collection of restricted groups from a user's token.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType extends EWSType
{
    /**
     * Represents the group security identifier (SID) and attributes for a
     * restricted group.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SidAndAttributesType
     */
    public $RestrictedGroupIdentifier;
}
