<?php
/**
 * Contains NonEmptyArrayOfRestrictedGroupIdentifiersType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of restricted groups from a user's token.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends EWSType
{
    /**
     * Represents the group security identifier (SID) and attributes for a
     * restricted group.
     *
     * @since Exchange 2007
     *
     * @var SidAndAttributesType
     */
    public $RestrictedGroupIdentifier;
}
