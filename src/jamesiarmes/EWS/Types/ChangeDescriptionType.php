<?php
/**
 * Contains ChangeDescriptionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for changes to individual properties.
 *
 * @package jamesiarmes\EWS\Types
 */
abstract class ChangeDescriptionType extends EWSType
{
    /**
     * Identifies extended MAPI properties to set.
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
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
