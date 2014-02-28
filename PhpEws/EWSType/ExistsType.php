<?php
/**
 * The Exists element represents a search expression that returns true if the
 * supplied property exists on an item.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ExistsType type.
 */
class ExistsType extends PhpEws\EWSType
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
