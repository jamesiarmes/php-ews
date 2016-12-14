<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchItemKindsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of messages to search.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchItemKindsType extends ArrayType
{
    /**
     * Indicates an item type to be searched.
     *
     * @since Exchange 2013
     *
     * @var string[]
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SearchItemKindType[]
     */
    public $SearchItemKind = array();
}
