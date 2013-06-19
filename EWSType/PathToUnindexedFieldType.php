<?php
/**
 * Contains EWSType_PathToUnindexedFieldType.
 */

/**
 * Identifies frequently referenced properties by URI.
 *
 * @package php-ews\Types
 */
class EWSType_PathToUnindexedFieldType extends EWSType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_UnindexedFieldURIType
     */
    public $FieldURI;
}
