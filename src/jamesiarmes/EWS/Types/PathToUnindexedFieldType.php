<?php
/**
 * Contains PathToUnindexedFieldType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies frequently referenced properties by URI.
 *
 * @package jamesiarmes\EWS\Types
 */
class PathToUnindexedFieldType extends EWSType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchange 2007
     *
     * @var UnindexedFieldURIType
     */
    public $FieldURI;
}
