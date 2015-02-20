<?php
/**
 * Contains NonEmptyArrayOfGroupIdentifiersType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of Active Directory directory service group object
 * security identifiers.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfGroupIdentifiersType extends EWSType
{
    /**
     * Represents a single security identifier and attribute for an Active
     * Directory object group of which the account is a member.
     *
     * @since Exchange 2007
     *
     * @var SidAndAttributesType
     */
    public $GroupIdentifier;
}
