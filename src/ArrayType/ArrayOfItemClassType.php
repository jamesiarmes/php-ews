<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfItemClassType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a list of item classes.
 *
 * @package php-ews\Array
 */
class ArrayOfItemClassType extends ArrayType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var string[]
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ItemClassType[]
     */
    public $ItemClass = array();
}
