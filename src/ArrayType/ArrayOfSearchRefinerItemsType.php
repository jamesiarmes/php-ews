<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchRefinerItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of one or more refiners.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchRefinerItemsType extends ArrayType
{
    /**
     * Search refiners.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\SearchRefinerItemType[]
     */
    public $Refiner = array();
}
