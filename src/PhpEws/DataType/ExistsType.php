<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The Exists element represents a search expression that returns true if the
 * supplied property exists on an item.
 */
class ExistsType extends DataType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
