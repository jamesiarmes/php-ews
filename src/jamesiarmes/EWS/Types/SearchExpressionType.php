<?php
/**
 * Contains SearchExpressionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the substituted element within a restriction.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Determine which classes need to extend this.
 */
abstract class SearchExpressionType extends EWSType
{
    /**
     * Identifies MAPI properties.
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
