<?php
/**
 * Contains EWSType_ChangeDescriptionType.
 */

/**
 * Base class for changes to individual properties.
 *
 * @package php-ews\Types
 */
abstract class EWSType_ChangeDescriptionType extends EWSType
{
    /**
     * Identifies extended MAPI properties to set.
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
