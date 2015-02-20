<?php
/**
 * Contains NonEmptyArrayOfAlternateIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the source identifiers to convert.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * Describes an item or folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var AlternateIdType
     */
    public $AlternateId;

    /**
     * Describes a public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * Describes a public folder item identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
