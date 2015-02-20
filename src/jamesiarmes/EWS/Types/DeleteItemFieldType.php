<?php
/**
 * Contains DeleteItemFieldType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an operation to delete a given property from an item during an
 * UpdateItem call.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ItemChangeDescriptionType.
 */
class DeleteItemFieldType extends EWSType
{
    /**
     * Identifies extended MAPI properties.
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
     * Identifies individual members of a dictionary property.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
