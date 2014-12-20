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
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType
     */
    public $FieldURI;
}
