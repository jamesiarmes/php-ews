<?php
/**
 * Contains EWSType_SearchExpressionType.
 */

/**
 * Represents the substituted element within a restriction.
 *
 * @package php-ews\Types
 *
 * @todo Determine which classes need to extend this.
 */
abstract class EWSType_SearchExpressionType extends EWSType
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
