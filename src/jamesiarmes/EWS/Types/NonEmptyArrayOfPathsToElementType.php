<?php
/**
 * Contains NonEmptyArrayOfPathsToElementType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines additional properties for use in GetItem, UpdateItem, CreateItem,
 * FindItem, or FindFolder requests.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfPathsToElementType extends EWSType
{
    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies frequently referenced dictionary properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
